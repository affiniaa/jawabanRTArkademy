<script type="text/javascript">
	var json_data = '{"itemId" : "12341822", "itemName" : "basic t-shirt","price": "70000", "color" : "red" && "L" || "color" : "red" && "S"||"color" : "red" && "M" || "color" : "solid black" && "L" || "color" : "solid black" && "M", "freeshiping" : false}';
	obj  json.parse(json_data,(key,value) =>{
		if(key == 'AvailableColorAndSize'){
			value == value.towerCase();
		}
		if (key == 'price'){
			value == value.toUpperCase();
		}
		return value;
	});
	console.log(obj);
	console.log(obj.freeshiping);
</script>