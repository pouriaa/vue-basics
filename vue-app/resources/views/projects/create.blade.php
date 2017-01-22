<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Doc</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.css">
	<style> body { padding-top:20px; } </style>
</head>
<body>
	<div id="root">
		<form method="post" action='/projects' @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
			<div class="control">	
				<label for="name" class="label">Project Name:</label>
				<input type="text" name="name" id="name" class="input" v-model="form.name">
				<span v-if="form.errors.has('name')" class="help is-danger" v-text="form.errors.get('name')"></span>
			</div>	
			
			<div class="control">
				<label for="description" class="label">Project description:</label>
				<input type="text" name="description" id="description" class="input" v-model="form.description">
				<span v-if="form.errors.has('description')" class="help is-danger" v-text="form.errors.get('description')"></span>
			</div>

			<div class="control">
				<button type="submit is-primary" :disabled="form.errors.any()"></button>
			</div>
		</form>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.3/axios.min.js"></script>
	<script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
	<script src="/js/app.js"></script>
</body>
</html>