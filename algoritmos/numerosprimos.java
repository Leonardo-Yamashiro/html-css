package algoritmos;
import java.util.*;

public class numerosprimos{
    public static void main(String [] args) {

        Scanner input = new Scanner(System.in);
        System.out.print("Digite um número: ");
        int numero = input.nextInt();
        input.close();

        int x1 = 2;
        while(x1 <= numero){
            System.out.println(x1);
            x1++;
        }
    }
}
