<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Doc</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.css">
	<style> body { padding-top:20px; } </style>
</head>
<body>
	<div id="app">
		{{-- <input type="text" v-model="coupon"> --}}
		{{-- <input type="text" :value="coupon" @input=" $event.target.value" --}}

		<coupon v-model="coupon"></coupon>

	</div>
	<script src="https://unpkg.com/vue@2.1.8/dist/vue.js"></script>
	<script src="/js/app.js"></script>
</body>
</html>