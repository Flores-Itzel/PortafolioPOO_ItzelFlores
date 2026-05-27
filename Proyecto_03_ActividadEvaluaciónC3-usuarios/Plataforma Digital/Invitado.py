from Usuario import Usuario

class Invitado(Usuario):
    def __init__(self, nombre, email):
        super().__init__(nombre, email)

    def acceso_sistema(self):
        print("Acceso limitado de invitado")

    def saludar(self):
        print("Hola, soy", self.nombre, "y soy un invitado")