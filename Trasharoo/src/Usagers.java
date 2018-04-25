import java.util.Scanner;

public class Usagers {

	private String nom, prenom, civilitee, dateNaissance;
	
	
	public Usagers() {
		this.nom ="";
		this.prenom ="";
		this.dateNaissance ="";
	}
	
	public void saisir(){
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Sassissez le nom de l'usager");
		this.nom= sc.next();
	
		System.out.println("Sassissez le prenom de l'usager");
		this.prenom= sc.next();
		
		System.out.println("Sassissez la civilitée de l'usager");
		this.civilitee= sc.next();
		
		System.out.println("Sassissez la date de naissance de l'usager");
		this.dateNaissance= sc.next();
		
		
		
	}
	public void afficher() {
		System.out.println("Le nom de l'usager est :"+this.nom);
		System.out.println("Le prenom de l'usager est :"+this.prenom);
		System.out.println("La civilitée de l'usager est :"+this.civilitee);
		System.out.println("La date de naissance de l'usager est :"+this.dateNaissance);
	}
	
	public String toXml() {
		String chaine = "";
		chaine = "<usagers>\n";
		chaine += "\t<nom>" + this.nom + "</nom>\n";
		chaine += "\t<prenom>" + this.prenom + "</prenom>\n";
		chaine += "\t<civilitee>" + this.civilitee + "</civilitee>\n";
		chaine += "\t<dateNaissance>" + this.dateNaissance + "</dateNaissance>\n";
		chaine += "</usagers>\n";
		return chaine;
	}
	
	
	
	
	/* GENERATE GETTERS AND SETTERS */

	public String getNom() {
		return nom;
	}

	public void setNom(String nom) {
		this.nom = nom;
	}

	public String getPrenom() {
		return prenom;
	}

	public void setPrenom(String prenom) {
		this.prenom = prenom;
	}

	public String getCivilitee() {
		return civilitee;
	}

	public void setCivilitee(String civilitee) {
		this.civilitee = civilitee;
	}

	public String getDateNaissance() {
		return dateNaissance;
	}

	public void setDateNaissance(String dateNaissance) {
		this.dateNaissance = dateNaissance;
	}
	
	
	
	
}
