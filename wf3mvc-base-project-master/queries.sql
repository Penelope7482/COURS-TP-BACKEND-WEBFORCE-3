use vtc;

select count(*) FROM conducteur;

select count(*) FROM vehicule;

select count(*) FROM association_vehicule_conducteur;

select * FROM vehicule
left join association_vehicule_conducteur on vehicule.id_vehicule = association_vehicule_conducteur.id_vehicule
WHERE association_vehicule_conducteur.id_conducteur is null;

select * FROM conducteur 
left join association_vehicule_conducteur on conducteur.id_conducteur = association_vehicule_conducteur.id_conducteur
WHERE association_vehicule_conducteur.id_vehicule is null;

select * FROM association_vehicule_conducteur 
left join conducteur on conducteur.id_conducteur = association_vehicule_conducteur.id_conducteur
left join vehicule on vehicule.id_vehicule = association_vehicule_conducteur.id_vehicule
Where conducteur.prenom = 'Philippe' AND conducteur.nom = 'Pandre';

select conducteur.id_conducteur, conducteur.prenom, conducteur.nom, vehicule.id_vehicule, vehicule.marque, vehicule.modele, vehicule.couleur, vehicule.immatriculation  from conducteur 
left join association_vehicule_conducteur on conducteur.id_conducteur = association_vehicule_conducteur.id_conducteur
left join vehicule on vehicule.id_vehicule = association_vehicule_conducteur.id_vehicule;

select conducteur.id_conducteur, conducteur.prenom, conducteur.nom, vehicule.id_vehicule, vehicule.marque, vehicule.modele, vehicule.couleur, vehicule.immatriculation  from vehicule 
left join association_vehicule_conducteur on association_vehicule_conducteur.id_vehicule = vehicule.id_vehicule
left join conducteur on conducteur.id_conducteur = association_vehicule_conducteur.id_conducteur;

select * from association_vehicule_conducteur
left join conducteur on association_vehicule_conducteur.id_conducteur=conducteur.id_conducteur 
left join vehicule on association_vehicule_conducteur.id_vehicule=vehicule.id_vehicule ;



