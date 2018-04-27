import java.util.Scanner;

public class Habitation 
{
	private String adresse, ville, type;
	private int codePostal;
	
	public Habitation() 
	{
		this.adresse = "";
		this.ville = "";
		this.type = "";
		this.codePostal = 0;		
	}
	
	public void saisir() 
	{
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Saisissez l'adresse de l'habitation : ");
		this.adresse = sc.next();
		
		System.out.println("Saisissez la ville ou se trouve l'habitation : ");
		this.ville = sc.next();
		
		System.out.println("Saisissez le type d'habitation : ");
		this.type = sc.next();
		
		System.out.println("Saisissez le code postal de l'habitation : ");
		this.codePostal = sc.nextInt();
	}
	
	public void afficher() 
	{
		System.out.println("L'adresse de l'habitation est : " +this.adresse);
		System.out.println("La ville où se trouve l'habitation est : " +this.ville);
		System.out.println("L'habitation est de type : " +this.type);
		System.out.println("Le code Postal de l'habitation est : " +this.codePostal);
	}
	
	public String toXml() 
	{
		String chaine = "";
		chaine = "<habitation>\n";
		chaine += "\t<adresse>" +this.adresse + "<adresse>\n";
		chaine += "\t<ville>" + this.ville + "<ville>\n";
		chaine += "\t<type>" + this.type + "<habitation>\n";
		chaine += "\t<codePostal>" + this.codePostal + "<codePostal>\n";
		chaine += "<habitation>";
		return chaine;
	}

	public String getAdresse() {
		return adresse;
	}

	public void setAdresse(String adresse) {
		this.adresse = adresse;
	}

	public String getVille() {
		return ville;
	}

	public void setVille(String ville) {
		this.ville = ville;
	}

	public String getType() {
		return type;
	}

	public void setType(String type) {
		this.type = type;
	}

	public int getCodePostal() {
		return codePostal;
	}

	public void setCodePostal(int codePostal) {
		this.codePostal = codePostal;
	}
}

