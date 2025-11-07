package es.dwes.UT01;

import java.io.Serializable;
import java.util.List;

import jakarta.enterprise.context.RequestScoped;
import jakarta.inject.Named;

@Named("helloBean")
@RequestScoped
public class HelloBean implements Serializable {

    // Práctica 2: Genera en este bean el listado de usuarios que 
    // se mostrará en la página.xhtml
        
    private String nombre = "María";
    private int edad = 28;

    public String getNombre() {
        return nombre;
    }

    public int getEdad() {
        return edad;
    }

    public List<Producto> getProductos() {
        return List.of(
            new Producto("Manzanas", 2.5),
            new Producto("Peras", 3.0),
            new Producto("Plátanos", 1.8)
        );
    }

    // Clase interna para socios
    // Práctica 2: Crea aquí la clase que defina a un usuario
    public static class Socio {
        private String nombre;
        private String apellidos;
        private String dni;
        private String email;
        private int edad;
        private Map<String, Double> pagos; // pagos por mes

        public Socio(String nombre, String apellidos, String dni, String email, int edad, Map<String, Double> pagos) {
            this.nombre = nombre;
            this.apellidos = apellidos;
            this.dni = dni;
            this.email = email;
            this.edad = edad;
            this.pagos = pagos;
        }

        public String getNombre() { return nombre; }
        public String getApellidos() { return apellidos; }
        public String getDni() { return dni; }
        public String getEmail() { return email; }
        public int getEdad() { return edad; }
        public Map<String, Double> getPagos() { return pagos; }
    }
