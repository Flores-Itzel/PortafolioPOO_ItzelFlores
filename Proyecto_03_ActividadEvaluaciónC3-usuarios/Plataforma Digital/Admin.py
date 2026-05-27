from Usuario import Usuario

# Clase Admin: hereda de Usuario y añade nivel de acceso
class Admin(Usuario):
    def __init__(self, nombre, email, nivel_acceso):
        super().__init__(nombre, email)   # llama al constructor de Usuario
        self.nivel_acceso = nivel_acceso  # atributo propio de Admin

    def acceso_sistema(self):
        """Sobrescribe acceso_sistema: acceso total según nivel."""
        print(f"  [{self.nombre}] ADMINISTRADOR — Nivel de acceso: {self.nivel_acceso}.")
        print(f"  Permisos: gestionar usuarios, ver reportes, eliminar cuentas.")

    def saludar(self):
        """Saludo personalizado para el administrador."""
        print(f"  Hola, soy {self.nombre}, administrador de nivel {self.nivel_acceso}.")

    def mostrar_datos(self):
        """Muestra datos del admin incluyendo nivel de acceso."""
        super().mostrar_datos()
        print(f"  Nivel   : {self.nivel_acceso}")