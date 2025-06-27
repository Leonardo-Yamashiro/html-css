package algoritmos;
import java.util.*;

public class NumerosPrimos{
    public static void main(String [] args) {

        Scanner input = new Scanner(System.in);
        System.out.print("Digite um número: ");
        int numero = input.nextInt();
        input.close();

        LinkedList<Integer> primos = new LinkedList<>();

        int x1 = 2;
        while(x1 <= numero){
            primos.add(x1);
            x1++;
        }

        int x2 = 2;
        while(x2 <= primos.size()){
            int x3 = 2;
            while(x3 <= primos.size()){
                int x4 = x2*x3;
                if(primos.contains(x4)){
                    primos.remove(Integer.valueOf(x4));
                }
                x3++;
            }
            x2++;
        }

        int x5 = 0;
        while(x5 <= primos.size()){
            System.out.println(primos.get(x5));
            x5++;
        }
    }
}