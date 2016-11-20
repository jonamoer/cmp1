<?php
/**
 * Created by PhpStorm.
 * User: jonatanmoerman
 * Date: 28/10/16
 * Time: 14:54
 */

$navigation = [
    'index.php' => 'Home',
    'create.php' => 'Create',
    'posts.php' => 'Posts',
    'blog.php' => 'test',
];

?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-
                    expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="index.php">CMP</a>
        </div>


        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <?php foreach($navigation as $url=>$pageName){
    if($current == $url){?>
}
                <li class="active"><a href="<?php echo $url?>"><?php echo $pageName ?></a></li>
                <?php }else{ ?>
                <li><a href="<?php echo $url ?>"><?php echo $pageName ?></a></li>
                <?php }} ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
