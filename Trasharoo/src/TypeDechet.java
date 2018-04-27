import java.util.Scanner;

public class TypeDechet 
{
	private int code;
	private String libelle;
	private String recyclable;
	private float tarif ;
	
	public TypeDechet() 
	{
		this.code = 0;
		this.libelle = "";
		this.recyclable = "";
		this.tarif = 0;
	}
	
	public void saisir() 
	{
		Scanner sc = new Scanner (System.in);
		
		System.out.println("Saississez le code du type de Dechet");
		this.code = sc.nextInt();
		
		System.out.println("Saississez le libelle du type Dechet");
		this.libelle = sc.next();
		
		System.out.println("Le dechet est-il recyclable ?");
		this.recyclable = sc.next();
		
		System.out.println("Saississez le tarif du Dechet");
		this.tarif = sc.nextFloat();
	}
	
	public void afficher() 
	{
		System.out.println("Le code du dechet est : " +this.code);
		System.out.println("Le libelle du dechet est : " +this.libelle);
		System.out.println("Recyclable : " +this.recyclable);
		System.out.println("Tarif du dechet : " +this.tarif+ "€");
	}
	
	public String toXml() 
	{
		String chaine ="";
		chaine = "<typeDechet> ";
		chaine += "\t<code>" + this.code + "<code>\n";
		chaine += "\t<libelle>" + this.libelle + "<libelle>\n";
		chaine += "\t<recyclable>" + this.recyclable + "<recyclable>\n";
		chaine += "\t<tarif>" + this.tarif + "<tarif>\n";
		chaine += "<typeDechet> ";
		return chaine;
	}

	public int getCode() {
		return code;
	}

	public void setCode(int code) {
		this.code = code;
	}

	public String getLibelle() {
		return libelle;
	}

	public void setLibelle(String libelle) {
		this.libelle = libelle;
	}

	public String getRecyclable() {
		return recyclable;
	}

	public void setRecyclable(String recyclable) {
		this.recyclable = recyclable;
	}

	public float getTarif() {
		return tarif;
	}

	public void setTarif(float tarif) {
		this.tarif = tarif;
	}
}
