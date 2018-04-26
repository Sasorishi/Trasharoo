import java.util.Scanner;

public class Habitation {
	private String adresse, ville, type;
	private int codePostal;
	
	public Habitation () {
		this.adresse="";
		this.ville="";
		this.type="";
		this.codePostal= 0;		
	}
	
	public void saisir() {
		
		Scanner sc = new Scanner(System.in);
		System.out.println(" Sassissez la ville ou se trouve l'habitation :");
		this.ville=sc.next();
		
		System.out.println(" Sassissez le type d'habitation :");
		this.type=sc.next();
		
		
		System.out.println(" Sassissez le code postal de l'habitation :");
		this.codePostal=sc.nextInt();
		
		Scanner scl = new Scanner(System.in);
		System.out.println(" Sassissez l'adresse de l'habitation :");
		this.adresse=scl.nextLine();
	}
	
	public void afficher() {
		System.out.println("La ville où se trouve l'habitation  est :"+this.ville);
		System.out.println("L'habitation est de type  :"+this.type);
		System.out.println("Le code Postal de l'habitation est :"+this.codePostal);
		System.out.println("L'adresse de l'habitation est :"+this.adresse);
	}
	public String toXml() {
		String chaine="<habitation>\n";
		chaine +="\t<adresse>"+this.adresse+"</adresse>\n";
		chaine +="\t<ville>"+this.adresse+"</ville>\n";
		chaine +="\t<habitation>"+this.adresse+"</habitation>\n";
		chaine +="\t<codePostal>"+this.adresse+"</codePostal>\n";
		chaine +="</habitation>";
		return chaine;
	
	}
	

}
