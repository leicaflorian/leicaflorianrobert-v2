import '../scss/app.scss'

import './iconsLoader'
import './contacts'
import './mobileMenu'

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
