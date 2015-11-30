<!--<div class="col-md-6">-->
<!--    <form class="form-horizontal" action="#">-->
<!--        <div class="row">-->
<!--            <div class="col-md-10 col-md-offset-1">-->
<!--                <div class="panel panel-flat">-->
<!--                    <div class="panel-heading">-->
<!--                        <h5 class="panel-title">Centered panel</h5>-->
<!--                        <div class="heading-elements">-->
<!--                            <ul class="icons-list">-->
<!--                                <li><a data-action="collapse"></a></li>-->
<!--                                <li><a data-action="reload"></a></li>-->
<!--                                <li><a data-action="close"></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>-->
<!---->
<!--                    <div class="panel-body">-->
<!--                        <div class="form-group">-->
<!--                            <label class="col-lg-3 control-label">Enter your name:</label>-->
<!--                            <div class="col-lg-9">-->
<!--                                <input type="text" class="form-control" placeholder="Eugene Kopyov">-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group">-->
<!--                            <label class="col-lg-3 control-label">Enter your password:</label>-->
<!--                            <div class="col-lg-9">-->
<!--                                <input type="password" class="form-control" placeholder="Your strong password">-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group">-->
<!--                            <label class="col-lg-3 control-label">Select your state:</label>-->
<!--                            <div class="col-lg-9">-->
<!--                                <div class="select2-container select" id="s2id_autogen7"><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-8">Select your state</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen8" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-8" id="s2id_autogen8"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen8_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-8" id="s2id_autogen8_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-8">   </ul></div></div><select data-placeholder="Select your state" class="select select2-offscreen" tabindex="-1" title="">-->
<!--                                    <option></option>-->
<!--                                    <optgroup label="Alaskan/Hawaiian Time Zone">-->
<!--                                        <option value="AK">Alaska</option>-->
<!--                                        <option value="HI">Hawaii</option>-->
<!--                                    </optgroup>-->
<!--                                    <optgroup label="Pacific Time Zone">-->
<!--                                        <option value="CA">California</option>-->
<!--                                        <option value="NV">Nevada</option>-->
<!--                                        <option value="WA">Washington</option>-->
<!--                                    </optgroup>-->
<!--                                    <optgroup label="Mountain Time Zone">-->
<!--                                        <option value="AZ">Arizona</option>-->
<!--                                        <option value="CO">Colorado</option>-->
<!--                                        <option value="ID">Idaho</option>-->
<!--                                    </optgroup>-->
<!--                                    <optgroup label="Central Time Zone">-->
<!--                                        <option value="AL">Alabama</option>-->
<!--                                        <option value="IA">Iowa</option>-->
<!--                                        <option value="KS">Kansas</option>-->
<!--                                    </optgroup>-->
<!--                                    <optgroup label="Eastern Time Zone">-->
<!--                                        <option value="CT">Connecticut</option>-->
<!--                                        <option value="DE">Delaware</option>-->
<!--                                        <option value="WV">West Virginia</option>-->
<!--                                    </optgroup>-->
<!--                                </select>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group">-->
<!--                            <label class="col-lg-3 control-label">Attach screenshot:</label>-->
<!--                            <div class="col-lg-9">-->
<!--                                <div class="uploader bg-warning"><input type="file" class="file-styled"><span class="filename" style="-webkit-user-select: none;">No file selected</span><span class="action" style="-webkit-user-select: none;"><i class="icon-googleplus5"></i></span></div>-->
<!--                                <span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group">-->
<!--                            <label class="col-lg-3 control-label">Your message:</label>-->
<!--                            <div class="col-lg-9">-->
<!--                                <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="text-right">-->
<!--                            <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </form>-->
<!--</div>-->



<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Students */

$this->title = 'Create Students';
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'groups'=> $groups,
    ]) ?>

</div>
