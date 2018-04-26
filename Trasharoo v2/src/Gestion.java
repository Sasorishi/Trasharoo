import java.util.Scanner;

public class Gestion {
	private Usagers unUsager;
	private Habitation uneHabitation;
	private Poubelle unePoubelle;
	
	
	public Gestion () {
		
		this.unUsager = new Usagers();
		this.uneHabitation = new Habitation();
		this.unePoubelle = new Poubelle(0); 
		
	}
	
	
	public void saisir() {
		System.out.println("LES INFOS DE L'USAGER -->");
		this.unUsager.saisir();
		System.out.println("LES INFOS DE L'HABITATION -->");
		this.uneHabitation.saisir();
		System.out.println("LES INFOS DE LA POUBELLE -->");
		this.unePoubelle.saisir();
		
	}
	
	public void afficher () {
		System.out.println("INFORMATIONS SUR L'USAGER :");
		this.unUsager.afficher();
		System.out.println("INFORMATIONS SUR L'HABITATION :");
		this.uneHabitation.afficher();
		System.out.println("INFORMATIONS SUR LA POUBELLE :");
		this.unePoubelle.afficher();
	}
	
	public void Menu()
	{
		int choix = 0;
		Scanner sc = new Scanner(System.in);
		
		do {
			System.out.println("______ Menu Ecole ______");
			System.out.println(" 1 - Saisir infos des usagers et leur habitations");
			System.out.println(" 2 - Afficher infos");
			System.out.println(" 3 - Gerer les levées");
			System.out.println(" 4 - Gerer les types de déchets");
			System.out.println(" 0 - Quitter");
			choix = sc.nextInt();
			switch (choix)
			{
				case 1 : this.saisir();break;
				case 2 : this.afficher();break;
				
			}
		}while(choix != 0);
	}
	
	public static void main(String[] args) {
		Gestion Trasharoo = new Gestion();
		Trasharoo.Menu();

	}
	
	
/* ERREURS RENCONTRES
 * 
 */
}
