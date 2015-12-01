
<select>
    <?php foreach ($groups as $key => $val) : ?>
    <option value="<?= $key; ?>"> <?= $val; ?> </option>
    <?php endforeach; ?>
</select>

<hr>

<?php for ($i = 0; $i < count($students); $i++) : ?>

    <div class="col-lg-3">
        <form action="#" class="form-horizontal">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <span>Detail</span>
                            <i class="caret"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#"><i class="icon-user-plus"></i><?= $students[$i]->e_mail ?></a></li>
                            <li><a href="#"><i class="icon-user-plus"></i><?= $students[$i]->phone ?></a></li>
                            <li><a href="#"><i class="icon-user-plus"></i><?= date('Y-m-d', $students[$i]->birth_at) ?></a></li>
                            <li><a href="#"><i class="icon-user-plus"></i><?= $students[$i]->avg ?></a></li>

                        </ul>
                    </li>

                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                    <a class="heading-elements-toggle">
                        <i class="icon-menu"></i>
                    </a>
                </div>


                <div class="panel-body">
                    <div class="media-left">
                        <a href="assets/images/placeholder.jpg" data-popup="lightbox">
                            <img src="assets/images/placeholder.jpg" style="width: 70px; height: 70px;" class="img-circle" alt="">
                        </a>
                    </div>

                    <?php
                    echo '$full_name <span style="color:red">' . $students[$i]->full_name . '</span><br>';
                    echo '$birth_at ' . date('Y-m-d', $students[$i]->birth_at) . '<br>';
                    echo '$avatar ' . $students[$i]->avatar . '<br>';
                    echo '$count_like ' . $students[$i]->count_like . '<br>';
                    echo '$count_coments ' . $students[$i]->count_coments . '<br>';
                    echo 'update_at ' . date('Y-m-d H:i:s', $students[$i]->updated_at) . '<br>';
                    ?>

                </div>

            </div>
        </form>
    </div>
<?php endfor; ?>

