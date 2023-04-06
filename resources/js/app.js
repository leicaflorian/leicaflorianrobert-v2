import '../scss/app.scss'

import { PageLoader } from './modules/pageLoader'
import { PageChanger } from './modules/pageChanger'
import { PageHeader } from './modules/pageHeader'
import { registerModules } from './modules/moduleRegisterer'
import { CardPopover } from './modules/cardPopover'
import { Dialogs } from './modules/dialogs'
import { Timeline } from './modules/timeline'
import { PageTitle } from './modules/pageTitle'
import { ImageLoader } from './modules/imageLoader'
import { Responsive } from './modules/responsive'

import AOS from 'aos'

registerModules([
  Responsive,
  PageLoader,
  PageChanger,
  PageHeader,
  CardPopover,
  Dialogs,
  Timeline,
  PageTitle,
  ImageLoader
])

import './iconsLoader'
import './contacts'
import './mobileMenu'

AOS.init()
