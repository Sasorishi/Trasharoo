import java.util.Scanner;

public class Levee {

	private int numero;
	private String dateLevee;
	private float poids;
	
	public Levee() {
		this.numero = 0;
		this.dateLevee="";
		this.poids=0;
		
	}
	
	
	public void  levee() {}
	public void  saisir() {
		Scanner sc = new Scanner(System.in);
		System.out.println("Saisissez le numero de la lev�e");
		this.numero=sc.nextInt();
		
		System.out.println("Saisissez la date  de la lev�e");
		this.dateLevee=sc.next();
		
		System.out.println("Saisissez le poids de la lev�e");
		this.poids=sc.nextFloat();
	}
	
	public void  afficher() {
		System.out.println("Le numero de la lev�e est :"+this.numero);
		System.out.println("La date de la lev�e est :"+this.dateLevee);
		System.out.println("La poids de la lev�e est :"+this.poids);
	}
	
	public String toXml() {
		String chaine; 
		chaine ="<Levee>";
		chaine += "\t<numero>"+this.numero+"</numero>\n";
		chaine += "\t<datelevee>"+this.dateLevee+"</datelevee>\n";
		chaine += "\t<poids>"+this.poids+"</poids>\n";
		chaine +="</Levee>\n";
		return chaine ;
	}

	/* GENERATE GETTERS AND SETTERS*/
	public int getNumero() {
		return numero;
	}


	public void setNumero(int numero) {
		this.numero = numero;
	}


	public String getDateLevee() {
		return dateLevee;
	}


	public void setDateLevee(String dateLevee) {
		this.dateLevee = dateLevee;
	}


	public float getPoids() {
		return poids;
	}


	public void setPoids(float poids) {
		this.poids = poids;
	}
	
	
	
	
	
}
