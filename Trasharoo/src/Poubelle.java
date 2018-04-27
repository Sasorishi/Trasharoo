import java.util.Scanner;

public class Poubelle 
{
	private String couleur;
	private int nbLevee;
	private TypeDechet unTypeDechet;
	private Levee lesLevee[];
	private Usager unUsager;
	private Habitation unHabitation;
	
	public Poubelle()
	{
		this.couleur = "";
		this.nbLevee = 0;
		this.unTypeDechet = new TypeDechet();
		this.unUsager = new Usager();
		this.unHabitation = new Habitation();
		this.lesLevee = new Levee[10];
	}
	
	public void saisir() 
	{
		Scanner sc = new Scanner(System.in);
		
		this.unUsager.saisir();
		this.unHabitation.saisir();
		
		System.out.println("Saissisez la couleur");
		this.couleur = sc.next();
		System.out.println("Saissisez le nombre de levee");
		this.nbLevee = sc.nextInt();

		this.unTypeDechet.saisir();
		
		System.out.println("Saissie validée !");
	}
	
	public void afficher() 
	{	
		this.unUsager.afficher();
		this.unHabitation.afficher();
		this.unTypeDechet.afficher();
		System.out.println("La couleur est : " + this.couleur);
		System.out.println("Le nombre de levee est : " + this.nbLevee);
	}
	
	public void ajouterLevee() 
	{
		Levee unLevee = new Levee();
		unLevee.saisir();
		this.lesLevee[this.nbLevee] = unLevee;
		this.nbLevee ++;
		System.out.println("Ajout de levee réussi !");
	}
	
	public void listerLesLevees() 
	{
		System.out.println("La liste des levee : ");
		
		for(int i = 0; i < this.nbLevee; i++)
		{
			this.lesLevee[i].afficher();
		}
	}
	
	public void totalPrix() 
	{
		
	}
	
	public String toXml() 
	{
		String chaine = "";
		chaine ="<poubelle>\n";
		chaine += "\t<couleur>" + this.couleur + "<couleur>\n";
		chaine += "\t<nbLevee>" + this.nbLevee + "<prenom>\n";
		chaine += this.unTypeDechet.toXml();
		
		for(int i = 0; i < this.nbLevee; i++)
		{
			chaine += this.lesLevee[i].toXml();
		}
		chaine += "<poubelle>\n";
		return chaine;
	}
	
	public void menu() 
	{
		int choix = 0;
		Scanner sc = new Scanner(System.in);
		do 
		{
			System.out.println(" _______MENU Poubelle______");
			System.out.println("  1- saissir               ");
			System.out.println("  2- afficher              ");
			System.out.println("  3- ajouter levee         ");
			System.out.println("  4- lister les levee      ");
			System.out.println("  5- total prix            ");
			System.out.println("  6- ToXml                 ");
			System.out.println("  0- Quitter               ");
			System.out.println(" __________________________");
			System.out.println("\t\t Votre choix -> ");
			choix = sc.nextInt();
			
			switch(choix)
			{
			 	case 1 : 
			 		this.saisir(); 
			 	break;
			 	
	            case 2 : 
	            	this.afficher(); 
	            break;
	            	
	            case 3 : 
	            	this.ajouterLevee(); 
	            break;
	            
	            case 4 : 
	            	this.listerLesLevees(); 
	            break;
	            
	            case 5 : 
	            	this.totalPrix(); 
	            break;
	            
	            case 6 : 
	            	System.out.println("TO XML  \n" + this.toXml()); 
	            break; 
			}
		}while (choix !=0);
	}
}
