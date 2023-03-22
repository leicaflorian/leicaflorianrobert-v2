import '../scss/app.scss'

import './header'
import './iconsLoader'
import './contacts'

import { PageLoader } from './modules/pageLoader'
import { PageChanger } from './modules/pageChanger'
import { registerModules } from './modules/moduleRegisterer'
import { CardPopover } from './modules/cardPopover'
import { Dialogs } from './modules/dialogs'
import { Timeline } from './modules/timeline'
import { PageTitle } from './modules/pageTitle'
import { ImageLoader } from './modules/imageLoader'

registerModules([
  PageLoader,
  PageChanger,
  CardPopover,
  Dialogs,
  Timeline,
  PageTitle,
  ImageLoader
])
