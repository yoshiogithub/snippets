{
	"Crear conexion":{
		"prefix": "con-php",
		"body": [
			"$1Hostname='localhost';",
			"$1Username='root';",
			"$1Username='';",
			"$1Username='db_';",
			"$1conexion=new msqli($1Hostname,$1Username,$1Username,$1Username);"
		],
		"description": "Crear conexion php"	
	},

	"Crear consulta en mysql":{
		"prefix": "query(crear)",
		"body": [
			"$1query='SELECT * FROM cliente INNER JOIN cuenta ON cliente.id_cliente=cuenta.id_cliente';",
        	"$1consulta=$1conexion->query($1query);",
			"while($1row=$1consulta->fetch_assoc()){",
			"",
			"\t $1nombre_cliente=$1_POST['nombre_cliente'];",
			"}"
		],
		"description": "Crear consulta en mysql"
	},

	
}
