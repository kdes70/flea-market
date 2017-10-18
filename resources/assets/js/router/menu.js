// show: meta.label -> name
// name: component name
// meta.label: display label

// lazy loading Components
// const Chartjs = resolve => require(['../views/charts/Chartjs.vue'], resolve)
// const Chartist = resolve => require(['../views/charts/Chartist.vue'], resolve)
// const Peity = resolve => require(['../views/charts/Peity.vue'], resolve)
// const Plotly = resolve => require(['../views/charts/Plotly.vue'], resolve)

export default [
    {
        name: 'Dashboard',
        path: '/dashboard',
        meta: {
            icon: 'fa-tachometer'
        },
        component: require('views/dashboard'),
        children: [
            {
                name: 'Chartist',
                path: 'chartist',
                component: require('views/charts/Chartist') // Chartist
            },
        ]
    },
]