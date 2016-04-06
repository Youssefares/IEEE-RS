<h1>Login</h1>

<style>
   .container{
     width:50%;
     margin: 0 auto;
   }
</style>
<?= $this->Form->create() ?>
<?= $this->Form->input('email') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>
