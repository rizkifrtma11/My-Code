<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
<script>
	while(true) {
		console.log('Hello World!')
	}

	var ulang = true;
	while(ulang) {
		console.log('hello world');
		ulang = confirm('lagi ?');
	}

	var nilaiAwal = 1;
	while(nilaiAwal <= 10) {
		console.log('hello world ' + nilaiAwal + 'x');
		nilaiAwal++;
	}

	for (var nilaiAwal = 1; nilaiAwal <= 10; nilaiAwal++) {
		console.log('hello world ' + nilaiAwal + 'x')
	}
</script>
</html>