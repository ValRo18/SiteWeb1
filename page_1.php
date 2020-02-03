<?php require_once './shared/header.php' ?>
<?php 
include './Persona.php';
$persona = new Persona();
?>
<section class="section">
    <div class="container">
      <h1 class="title">
        Info:
      </h1>
    <div class="info">
		<p>Name:</p>
		 <input value="<?= $persona->name ?>">
		 <p> Last Name:</p>
		 <input value="<?= $persona->lastname ?>">
		 <p>ID:</p>
		 <input value="<?= $persona->id ?>">
		 <p>Age:</p>
		 <input placeholder="Large input value="<?= $persona->age ?>">
		 <p>Phone:</p>
		 <input value="<?= $persona->phone ?>">
		 <p>Sex:</p>
		 <input value="<?= $persona->sex ?>">
		  <p>Hobbies:</p>
		 <input value="<?= $persona->hobbies?>">
    </div>
</section>

<?php require_once './shared/footer.php' ?>