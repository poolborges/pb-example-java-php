import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

//IMPORT NPM CSS PACKAGES
import 'wingcss/dist/wing.min.css';

createInertiaApp({
  //id: 'pb-sample-frontend', By default, Inertia assumes that your application's root template has a root element with an id of app.
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})