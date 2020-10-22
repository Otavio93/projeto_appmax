/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        teste: "teste",
        produtos: {
            sku: '1234',
            nome: 'camisa',
            preco: 'R$10'
        }
    },
    methods: {
        showModal: function  (event) {
            $('#vueModal').modal('show')
        },
        showModalSKU: function  (event) {
            $('#vueModalCreate').modal('show')
        },
        showModalProduct: function  (event) {
            fetch('/products')
            .then(function(response) {
                return response.json();
            }).then(function(json) {
        
                const select = document.getElementById("select-sku");
                var length = select.options.length;
                for (i = length-1; i >= 0; i--) {
                  select.options[i] = null;
                }
                json.forEach(element => {
                    var option = document.createElement("option");
                    option.text = `${element.sku} / ${element.name}`;
                    option.value =  element.id;
                    select.add(option); 
                });
        });

            $('#vueModalProduct').modal('show')
        },

    }
});
