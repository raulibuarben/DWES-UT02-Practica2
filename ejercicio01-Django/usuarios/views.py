from django.http import HttpResponse
import json

def usuario_view(request):
    # Datos del usuario en formato JSON
    usuario_json = """
    {
        "nombre": "Raúl",
        "apellidos": "Ibuarben Alba",
        "dni": "12345678A",
        "email": "raulibu@gmail.com",
        "telefono": "66666666",
        "pagos": {
            "enero": 50,
            "febrero": 50,
            "marzo": 50,
            "abril": 50,
            "mayo": 50,
            "junio": 50,
            "julio": 50,
            "agosto": 50,
            "septiembre": 50,
            "octubre": 50,
            "noviembre": 50,
            "diciembre": 0
        }
    }
    """

    # Cargar JSON a un diccionario de Phyton
    usuario = json.loads(usuario_json)

    # Mostrar los datos personales
    print("=== Datos del usuario ===")
    print(f"Nombre: {usuario['nombre']}")
    print(f"Apellidos: {usuario['apellidos']}")
    print(f"DNI: {usuario['dni']}")
    print(f"Email: {usuario['email']}")
    print(f"Teléfono: {usuario['telefono']}\n")

    # Mostrar pagos mes a mes
    print("=== Pagos de la asociación ===")
    total_pagado = 0
    pagos_html = ""
    for mes, cantidad in usuario["pagos"].items():
        estado = "PAGADO" if cantidad > 0 else "PENDIENTE"
        print(f"{mes.capitalize():<10}: {cantidad} € -> {estado}")
        total_pagado += cantidad

    print("\nTotal anual pagado:", total_pagado, "€")



    # HTML de respuesta
    html = f"""
    <html>
        <head><title>Datos del Usuario</title></head>
        <body>
            <h1>Información personal</h1>
            <p><strong>Nombre:</strong> {usuario['nombre']}</p>
            <p><strong>Apellidos:</strong> {usuario['apellidos']}</p>
            <p><strong>DNI:</strong> {usuario['dni']}</p>
            <p><strong>Email:</strong> {usuario['email']}</p>
            <p><strong>Teléfono:</strong> {usuario['telefono']}</p>


        </body>
    </html>
    """

    return HttpResponse(html)
