<?php
namespace Concrete\Package\Expanse\Blocks\Expanse;

use Concrete\Core\Block\BlockController;

class Controller extends BlockController {

  protected $btTable = 'btExpanse';
  protected $btInterfaceWidth = "520";
  protected $btInterfaceHeight = "780";
  protected $btWrapperClass = 'ccm-ui';
  protected $btCacheBlockRecord = true;
  protected $btCacheBlockOutput = true;
  protected $btCacheBlockOutputOnPost = true;
  protected $btCacheBlockOutputForRegisteredUsers = false;
  protected $btDefaultSet = 'multimedia';

  public $header = "Site Name";

  public function getBlockTypeName()
  {
    return t("Expanse");
  }

  public function getBlockTypeDescription()
  {
    return t("Allows users to customise the header design");
  }

  public function view()
  {
    $this->set('header', $this->header);
  }

}
?>