package es.dwes.UT01;

import java.io.Serializable;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import jakarta.enterprise.context.RequestScoped;
import jakarta.inject.Named;

@Named("helloBean")
@RequestScoped
public class HelloBean implements Serializable {

    private List<Socio> socios;

    // Constructor: aquí inicializamos la lista de socios
    public HelloBean() {
        socios = new ArrayList<>();

        // Socio 1
        Map<String, Double> pagos1 = new HashMap<>();
        pagos1.put("Enero", 50.0);
        pagos1.put("Febrero", 50.0);
        pagos1.put("Marzo", 50.0);
        pagos1.put("Abril", 50.0);
        pagos1.put("Mayo", 50.0);
        pagos1.put("Junio", 50.0);
        pagos1.put("Julio", 50.0);
        pagos1.put("Agosto", 50.0);
        pagos1.put("Septiembre", 50.0);
        pagos1.put("Octubre", 50.0);
        pagos1.put("Noviembre", 50.0);
        pagos1.put("Diciembre", null);
        socios.add(new Socio("Raúl", "Ibuarben Alba", "12345678A", "raulibu@gmail.com", 34, pagos1));

        // Socio 2
        Map<String, Double> pagos2 = new HashMap<>();
        pagos2.put("Enero", 50.0);
        pagos2.put("Febrero", 50.0);
        pagos2.put("Marzo", 50.0);
        pagos2.put("Abril", null);
        pagos2.put("Mayo", 50.0);
        pagos2.put("Junio", 50.0);
        pagos2.put("Julio", null);
        pagos2.put("Agosto", 50.0);
        pagos2.put("Septiembre", 50.0);
        pagos2.put("Octubre", 50.0);
        pagos2.put("Noviembre", null);
        pagos2.put("Diciembre", null);
        socios.add(new Socio("Carlos", "López Pérez", "87654321B", "carloslopez@gmail.com", 35, pagos2));

        // Socio 3
        Map<String, Double> pagos3 = new HashMap<>();
        pagos3.put("Enero", null);
        pagos3.put("Febrero", 50.0);
        pagos3.put("Marzo", 50.0);
        pagos3.put("Abril", 50.0);
        pagos3.put("Mayo", null);
        pagos3.put("Junio", 50.0);
        pagos3.put("Julio", 50.0);
        pagos3.put("Agosto", null);
        pagos3.put("Septiembre", 50.0);
        pagos3.put("Octubre", 50.0);
        pagos3.put("Noviembre", null);
        pagos3.put("Diciembre", null);
        socios.add(new Socio("María", "Fernández Ruiz", "56789012C", "mariafernandez@email.com", 22, pagos3));
    }

    // Getter para acceder a los socios desde el XHTML
    public List<Socio> getSocios() {
        return socios;
    }

    // Clase interna Socio
    public static class Socio {
        private String nombre;
        private String apellidos;
        private String dni;
        private String email;
        private int edad;
        private Map<String, Double> pagos;

        public Socio(String nombre, String apellidos, String dni, String email, int edad, Map<String, Double> pagos) {
            this.nombre = nombre;
            this.apellidos = apellidos;
            this.dni = dni;
            this.email = email;
            this.edad = edad;
            this.pagos = pagos;
        }

        // Getters
        public String getNombre() { return nombre; }
        public String getApellidos() { return apellidos; }
        public String getDni() { return dni; }
        public String getEmail() { return email; }
        public int getEdad() { return edad; }
        public Map<String, Double> getPagos() { return pagos; }

        //Método para calcular el pago anual total
        public double getTotalPagado() {
        double total = 0.0;
        for (Double pago : pagos.values()) {
            if (pago != null) {
                total += pago;
            }
        }
        return total;
    }
        
    }
}