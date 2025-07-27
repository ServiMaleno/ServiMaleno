import pymysql

conn = pymysql.connect(
    host='localhost',
    user='root',
    password='',
    database='dbservimaleno',
    charset='utf8mb4'
)

try:
    with conn.cursor() as cursor:
        cursor.execute("SELECT nombre, email, fecha FROM usuario LIMIT 5;")
        resultados = cursor.fetchall()

        print("Conexión exitosa. Primeros usuarios registrados:")
        for nombre, correo, fecha in resultados:
            print(f"- {nombre} | {correo} | Fecha de Registro: {fecha}")
finally:
    conn.close()