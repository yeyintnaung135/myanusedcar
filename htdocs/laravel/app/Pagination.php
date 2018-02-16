<?php namespace App;

use Landish\Pagination\Pagination as BasePagination;

class Pagination extends BasePagination
{

    /**
     * Pagination wrapper HTML.
     *
     * @var string
     */
    protected $paginationWrapper   ='<li class="page-controls col-xs-12 col-md-1 col-sm-1"><ul></ul></li><li class="pages col-xs-12 col-md-11 col-sm-11"><ul>%s %s %s</ul><li class="page-controls col-xs-12 col-md-1 col-sm-1">&nbsp

                                                </li></li>';
    protected $availablePageWrapper='<li class="page"><a href="%s">%s</a></li>';
    protected $activePageWrapper   ='<li class="page page-active"><a href="#">%s</a></li>';
    protected $disabledPageWrapper ='<li class="page disabled"><a style="background-color:rgb(228, 217, 217)">%s</a></li>';
    protected $previousButtonText  ='Previous';
    protected $nextButtonText      ='Next';


}