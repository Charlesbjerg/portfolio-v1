import Vue from 'vue';
import Router from 'vue-router';
import Home from './components/Home';
import Contact from './components/Contact';
import About from './components/About';
import Portfolio from './components/Portfolio/Portfolio';
import PortfolioPost from './components/Portfolio/PortfolioPost';

const appPath = `/${wpData.app_path}`;

Vue.use( Router );

/**
 * Each route should map to a component.
 * The "component" can either be an actual component or just a component options object.
 */
export default new Router({
	base: appPath, // path of the SPA relative to the domain.
	//mode: 'history', // or "history"
	linkExactActiveClass: 'active-link',
	routes: [
		{
			path: '/',
			name: 'Home',
			component: Home
		},
		{
			path: '/about',
			name: 'About',
			component: About
		},
		{
			path: '/contact',
			name: 'Contact',
			component: Contact
		},
		{
			path: '/portfolio',
			name: 'Portfolio',
			component: Portfolio
		},
		{
			path: '/portfolio/:slug',
			name: 'PortfolioPost',
			component: PortfolioPost
		}
	]
});
