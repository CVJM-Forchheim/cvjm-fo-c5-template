<?php
namespace Concrete\Package\Cvjmtemplate;
use Package;
use PageTheme;
defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package {

     protected $pkgHandle = 'cvjmTemplate';
     protected $appVersionRequired = '8.4.0';
     protected $pkgVersion = '3.1';

     public function getPackageDescription() {
          return t("Template mit CVJM-look.");
     }

     public function getPackageName() {
          return t("CVJM Template");
     }

     public function install() {
          $pkg = parent::install();

		  PageTheme::add('cvjm', $pkg);
     }

     public function upgrade(){
		$pkg = Package::getByHandle('cvjm');

		parent::upgrade($pkg);
	}
}
?>