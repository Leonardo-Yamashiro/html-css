package algoritmos;

public class Node {
    private int valor;
    private Node esq,dir;

    public Node(int x){
        this.valor = x;
        this.esq = null;
        this.dir = null;
    }

    public void add(int x){
        if(dir != null){
            dir.add(x);
        }
        else{
            dir = new Node(x);
        }
    }
}
