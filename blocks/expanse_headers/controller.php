<?php

namespace Concrete\Package\Expanse\Blocks\ExpanseHeaders;

use Concrete\Core\Block\BlockController;

class Controller extends BlockController {

  protected $btTable = 'btExpanseHeaders';
  protected $btInterfaceWidth = "520";
  protected $btInterfaceHeight = "780";
  protected $btWrapperClass = 'ccm-ui';
  protected $btCacheBlockRecord = true;
  protected $btCacheBlockOutput = true;
  protected $btCacheBlockOutputOnPost = true;
  protected $btCacheBlockOutputForRegisteredUsers = false;
  protected $btDefaultSet = 'multimedia';

  public function getBlockTypeName()
  {
    return t("Expanse Header Builder");
  }

  public function getBlockTypeDescription()
  {
    return t("Allows users to customise the header design");
  }

}


?>