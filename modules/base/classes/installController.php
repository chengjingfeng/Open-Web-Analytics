<?php 

//
// Open Web Analytics - An Open Source Web Analytics Framework
//
// Copyright 2006 Peter Adams. All rights reserved.
//
// Licensed under GPL v2.0 http://www.gnu.org/copyleft/gpl.html
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
// $Id$
//

require_once(OWA_DIR.'owa_controller.php');

/**
 * Abstract Install Controller
 * 
 * @author      Peter Adams <peter@openwebanalytics.com>
 * @copyright   Copyright &copy; 2006 Peter Adams <peter@openwebanalytics.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GPL v2.0
 * @category    owa
 * @package     owa
 * @version		$Revision$	      
 * @since		owa 1.0.0
 */


class owa_installController extends owa_controller {

	var $is_installer = true;
		
	function owa_installController($params) {
		
		return owa_installController::__construct($params); 
	}
	
	function __construct($params) {
		
		return parent::__construct($params);
	}
			
	function pre() {
		
		if (owa_coreAPI::getSetting('base', 'install_complete')) {
			owa_coreAPI::debug('Install complete redirecting to base.installDetected');
			return $this->redirectBrowser('base.installDetected', false);
		}

		return;
	}

}

?>