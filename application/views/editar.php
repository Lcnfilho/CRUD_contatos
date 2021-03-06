<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	$this->load->view('commons/cabecalho'); 
?>

<div class="container">
	<div class="page-header">
		<h1>Editar contatos</h1>
	</div>
	<?php if ($this->session->flashdata('error') == TRUE): ?>
		<div class="alert alert-warning"><?php echo $this->session->flashdata('error'); ?></div>
	<?php endif; ?>
	<?php if ($this->session->flashdata('success') == TRUE): ?>
		<div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
	<?php endif; ?>

	<form method="post" action="<?=base_url('atualizar')?>" enctype="multipart/form-data">

		<div class="col-md-4">
			<div class="form-group">
				<label>Nome:</label>
				<input type="text" name="nome" class="form-control" value="<?=$contato['nome']?>" required/>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Telefone:</label>
				<input type="text" name="telefone" class="form-control" value="<?=$contato['telefone']?>" required/>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Email:</label>
				<input type="email" name="email" class="form-control" value="<?=$contato['email']?>" required/>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Endereço:</label>
				<input type="text" name="endereco" class="form-control" value="<?=$contato['endereco']?>" required/>
			</div>
		</div>
		<div class="col-md-4">
			<label><em>Todos os campos são obrigatórios.</em></label>
			<div class="clearfix"></div>
			<input type="hidden" name="id" value="<?=$contato['id']?>"/>
			<input type="submit" value="Salvar" class="btn btn-success" />
		</div>
	</form>

</div>

<?php $this->load->view('commons/rodape'); ?>
