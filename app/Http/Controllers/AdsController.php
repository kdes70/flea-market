<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use App\Http\Requests\AdsRequest;
use App\Photo;
use Illuminate\Http\UploadedFile;


class AdsController extends Controller
{

    //index
    public function index()
    {

        $ads = Ad::adsList();

        return view('ads.index', compact('ads'));
    }

    public function create()
    {

        $categories = Category::pluck('name', 'id');

        return view('ads.create')->with(compact('categories'));
    }


    public function store(AdsRequest $request)
    {
        $input = $request->all();

        $input['user_id'] = (\Auth::id()) ? \Auth::id() : '0';
        $input['confirm'] = true;
        $input['slug'] = str_slug($input['title']);

        // Start transaction
        \DB::transaction(function () use ($request, $input) {

            // записываем объявление
            $ads = Ad::create($input);

            if (!$ads) {
                throw new \Exception('Ad not created');
            }

            if ($request->hasFile('files') && $ads->id) {

                $upload = $this->makePhoto($request->file('files'), $ads->id);

                $photo = Photo::savePhoto($upload);

                if (!$photo) {
                    throw new \Exception('Photo not created');
                }
            }

        });

        // TODO вывести сообщение
        return redirect('/')->with('message', 'Ads successfully added!');
    }

    /**
     * @param UploadedFile $file
     * @return null
     * @internal param $id
     */
    public function makePhoto($file, $id)
    {
        if (is_array($file)) {
            $upload = null;

            foreach ($file as $f) {
                $upload[] = Photo::named($f->getClientOriginalName(), $id)->move($f);
            }

            return $upload;

        } else {

            return Photo::named($file->getClientOriginalName(), $id)->move($file);
        }

    }
}
