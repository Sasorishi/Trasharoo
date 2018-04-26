import java.util.Scanner;

public class Poubelle {
	private String couleur;
	private int nbLevee;
	private Levee lesLevee[] ;
	private TypeDechet unTypeDechet;


	public Poubelle (int taille) {
		this.couleur="";
		this.nbLevee=0;
		this.lesLevee = new Levee[taille];
		this.unTypeDechet = new TypeDechet();
		
	}
	
	public void saisir() {
		
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Donner la couleur de la poubelle:");
		this.couleur = sc.next();
		
		System.out.println("Donner le nombre de levées :");
		this.nbLevee = sc.nextInt();
		
		System.out.println("Donner le type de dechet  :");
		this.unTypeDechet.saisir();
	}
	
	public void afficher() {
		
		System.out.println("La couleur de la poubelle est : " + this.couleur );
		System.out.println("Le nombre de levee est : " + this.nbLevee );
		System.out.println("Type de déchets"+this.unTypeDechet);
	}
	
	public void ajouterLevee() {
		Levee uneLevee = new Levee ();
	    uneLevee.saisir();
		this.lesLevee[this.nbLevee] = uneLevee;
		this.nbLevee ++ ;
		System.out.println("Levée inséré avec succés !");
		
	}
	public void listerLesLevees() {
		System.out.println("Voici les levées de poubelle ");
		for( int i = 0 ; i < this.nbLevee ; i ++ )
		{
			this.lesLevee[i].afficher();
		}
	}
	public void total() {}
	public void totalPrix() {}
	
	public String toXml() {
		String chaine = "";
		chaine = "<Poubelle>\n";
		chaine += "\t<couleur>" + this.couleur  + "</couleur>\n";
		chaine += "\t<nbLevee>" + this.nbLevee + "</nbLevee>\n";
		chaine += "\t<nbenfants>" + this.unTypeDechet + "</nbenfants>\n";
		chaine += this.unTypeDechet.toXml();
		
		for( int i = 0 ; i < this.nbLevee ; i ++ )
		{
			chaine += this.lesLevee[i].toXml();
		}
		chaine += "</poubelle>\n";
		return chaine;
	}
	public void Gerer() {
		int choix = 0;
    	Scanner sc = new Scanner(System.in);
    	do {
    		System.out.println("  ________ MENU Poubelle _______		|");
    		System.out.println("|										|");
    		System.out.println("|	1-	Saisir info poubelle			|");
    		System.out.println("|	2-	Afficher les infos				|");
    		System.out.println("|	3-	Ajouter une levée à la Trash	|");
    		System.out.println("|	4-	Lister les levées de la Trash  	|");
    		System.out.println("|	5-	Afficher le prix total  		|");
    		System.out.println("|	6-	ToXml					   		|");
    		System.out.println("|	0-	Quitter		     				|");
    		System.out.println("|___________________________________	|");
    		System.out.println("Votre choix -> ");
    		
    		choix = sc.nextInt();
	    		switch(choix)
	    		{
	    		case 1 : this.saisir();		      break;
	    		case 2 : this.afficher();	      break;
	    		case 3 : this.ajouterLevee();     break;
	    		case 4 : this.listerLesLevees();  break;
	    		case 5 : this.totalPrix();	      break;
	    		case 6 : System.out.println("TO XML : \n"+this.toXml()); break;
	    		}
    	}
    	while (choix != 0);
    	}
	}
