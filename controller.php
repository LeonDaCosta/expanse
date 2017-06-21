<?php
namespace Concrete\Package\Expanse;

use Package;
use PageTheme;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package
{

	/**
* Protected data members for controlling the instance of the package
*/
	protected $pkgHandle = 'expanse';
	protected $appVersionRequired = '5.7.1';
	protected $pkgVersion = '0.0.1';
	protected $pkgAllowsFullContentSwap = true;


	/**
	 * This function returns the functionality description ofthe package.
	 *
	 * @param void
	 * @return string $description
	 * @author AN 22/04/2017
	 */
	public function getPackageDescription()
	{
    	return t("A simple theme based on the Bootstrap framework.");
	}

	/**
	 * This function returns the name of the package.
	 *
	 * @param void
	 * @return string $name
	 * @author
	 */

	public function getPackageName()
	{
    	return t("Expanse");
	}
	/**
	 * This function is executed during initial installation of the package.
	 *
	 * @param void
	 * @return void
	 * @author
	 */
	public function install()
{
    $pkg = parent::install();
		PageTheme::add('expanse', $pkg);

    // Install Single Pages
  //  $this->install_single_pages($pkg);
}

/**
 * This function is executed during uninstallation of the package.
 *
 * @param void
 * @return void
 * @author AN Leon Da Costa
 */
public function uninstall()
{
    $pkg = parent::uninstall();
}

/**
 * This function is used to install single pages.
 *
 * @param type $pkg
 * @return void
 * @author Leon Da Costa
 */
 /*
function install_single_pages($pkg)
{
    $directoryDefault = SinglePage::add('/dashboard/expanse/', $pkg);
    $directoryDefault->update(array('cName' => t('Expanse'), 'cDescription' => t('Zone')));
}
*/
}
?>