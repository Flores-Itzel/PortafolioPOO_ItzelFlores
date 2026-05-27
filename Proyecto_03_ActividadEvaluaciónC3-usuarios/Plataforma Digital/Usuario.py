class Usuario:
    def __init__(self, nombre, email):  # ← dos guiones bajos en cada lado
        self.nombre = nombre
        if "@" in email:
            self.email = email
        else:
            self.email = "Correo inválido"

    def mostrar_datos(self):
        print("Nombre:", self.nombre)
        print("Email:", self.email)

    def acceso_sistema(self):
        print("Acceso básico")

    def saludar(self):
        print("Hola,", self.nombre)