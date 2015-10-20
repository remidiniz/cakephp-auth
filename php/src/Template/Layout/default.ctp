<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>StarAd24</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    </head>
    <body>
   
	<div id="container">
        <div id="content">
        
            <?= $this->Flash->render() ?>
            
            <div class="row">
            
				<?= $this->fetch('content') ?>
				
		    </div>
        </div>
        
        <footer></footer>
    </div>
		
	</body>
</html>

<?php echo $this->Html->script('jquery.min'); ?>
<?php echo $this->Html->script('bootstrap.min'); ?>