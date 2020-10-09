import {library} from '@fortawesome/fontawesome-svg-core'
import {faSun,faMoon} from '@fortawesome/free-solid-svg-icons'
import {FontAwesomeIcon} from '@fortawesome/vue-fontawesome'

library.add(faSun, faMoon)

Nova.booting((Vue, router, store) => {
    Vue.component('NovaWorldClock', require('./components/Card'));
    Vue.component('font-awesome-icon', FontAwesomeIcon)
})
