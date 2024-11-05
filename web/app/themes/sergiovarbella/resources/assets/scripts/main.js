import 'jquery';
import 'bootstrap';
import '@splidejs/splide';
import './autoload/**/*'

import Router from './util/Router';
import common from './routes/common';
import single from './routes/single';

import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faAt } from '@fortawesome/free-solid-svg-icons';
import { } from '@fortawesome/free-brands-svg-icons';
import { } from '@fortawesome/free-regular-svg-icons';
library.add(faAt);
dom.watch();

const routes = new Router({
  common,
  single,
});

jQuery(document).ready(() => routes.loadEvents());
