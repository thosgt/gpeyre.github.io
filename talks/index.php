<?php	include "../tools.php";	ParseArguments( $argv );	$Title="Some Recent Talks";	include "../header.php";		function talk($lien, $titre, $lieu, $date)	{ 	 	echo '<li><a href="' . $lien . '"><em>' . $titre . '</em></a> - ' . $lieu . ', ' . $date . '.</li>';	}	function conf($lien, $name, $lieu)	{ 	 	$a =  '<a href="' . $lien . '">' . $name . '</a>,' . $lieu; 	 	return $a;	}	?><p>	<a href="https://speakerdeck.com/gpeyre">On SpeakerDeck</a><br/>	<a href="http://fr.slideshare.net/gpeyre/presentations">On slideshare.</a><p/><blockquote>   <blockquote>     <ul><?php		/*talk('2012-11-26-stats-paris.pdf', 'Robust Sparse Analysis (with S. Vaiter, J. Fadili and C. Dossal)', 'Sem. Stat. Paris', 'Nov. 2012');talk('2012-11-12-jbami.pdf', 'Parameter selection for inverse problems', 'JBAMI, Bordeaux', 'Nov. 2012');talk('2012-07-11-nice.pdf', 'An Introduction to Optimal Transport', 'NatImages Workshop, Nice', 'July 2012');talk('2012-07-10-centrale.pdf', 'Sparsity and Compressed Sensing', 'Biomedical Image Analysis Summer School, Centrale Paris', 'July 2012');talk('2012-05-20-siims-textures.pdf', 'Optimal Transport for Texture Mixing (with S. Ferradans and G.S. Xia)', 'SIAM IS12, Philadelphia', 'May 2012');talk('2012-04-04-picof.pdf', 'Robuste Sparse Analysis (with S. Vaiter, C. Dossal and J. Fadili)', 'PICOF\'12, Ecole Polytechnique', 'Feb. 2012');talk('2012-01-27-ircam.pdf', 'Optimal Transport in Imaging Sciences (with J. Rabin, G-S. Xia, S. Ferradans, J.F. Aujol)', 'S�minaire L�on Brillouin, IRCAM', 'Jan. 2012');talk('2011-12-13-bezout.pdf', 'Compressed Sensing', 'Bezout coloquium, UMLV', 'Dec. 2011');talk('2011-12-25-marseille.pdf', 'A Review of Proximal Splitting Methods, with a New One (with H. Raguet and J. Fadili)', 'Journ�es Traitement de l\'image, Marseille', 'Nov. 2011');talk('2011-09-01-eusipco-overlap.pdf',  'Group Sparsity with Overlapping Partition Functions (with J. Fadili)', 'EUSIPCO, Barcelona', 'Sept. 2011');talk('2011-09-01-eusipco-quadtree.pdf', 'Adaptive Structured Block Sparsity via Dyadic Partitioning (with J. Fadili and C. Chesneau)', 'EUSIPCO, Barcelona', 'Sept. 2011');talk('2011-07-25-emmcvpr.pdf', 'Wasserstein texture synthesis and segmentation (with M.Jung and L.Cohen)', 'EMMCPVR, St.Petersbourg', 'Jul. 2011');talk('2011-05-31-nice-astro.pdf', 'Learning Sparse Representations', 'International Workshop on Cosmology and Sparsity, Nice', 'April 2011');talk('2011-05-04-sampta.pdf', 'Learning Sparse Analysis Prior (with J. Fadili)', 'Sampta\'11, Singapore', 'April 2011');talk('2011-03-21-louvain-nonlocal.pdf', 'Adaptive Patch-based Representations', 'UCL Music Seminar, Louvain-la-Neuve', 'March 2011');talk('2011-03-21-louvain-geometry.pdf', 'Adaptive Geometric Representations', 'UCL Music Seminar, Louvain-la-Neuve', 'March 2011');talk('2011-03-11-willow.pdf', 'Wasserstein Imaging (with J. Rabin)', 'Willow INRIA Seminar, Paris', 'March 2011');talk('2011-03-09-cmap.pdf', 'Geodesic Methods in Computer Vision and Graphics', 'CMAP Seminar, Ecole Polytechnique, Palaiseau', 'March 2011');talk('2010-07-05-hdr.pdf', 'Adaptive Geometric Representations of Images and Surfaces', 'Habilitation thesis', 'July 2010');talk('2010-06-25-curves-surfaces.pdf', 'Numerical Tour of Mesh Processing', 'Curves and Surfaces, Avignon', 'June 2010');talk('2010-05-20-neurosciences-marseilles.pdf', 'Sparse Geometric Image Processing', 'Computational Neuroscience: From Representations to Behavior, Marseilles', 'May 2010');talk('2010-05-31-epfl.pdf', 'Compressed Sensing', 'EPFL', 'May 2010');talk('2010-05-14-siam-shapes.pdf', 'Geodesic Shape Retrieval with Optimal Transport (with J. Rabin and L. Cohen)', 'SIAM IS10, Chicago', 'April 2010');talk('2010-04-24-isis-textures.pdf', 'Statistical Texture Synthesis and Mixing (with J. Rabin)', 'ISIS Texture Meeting, Telecom Paris', 'March 2010');talk('2010-01-22-natimages-textures.pdf', 'Texture Synthesis and Sparse Modeling', 'NatImages Texture Meeting, IHP, Paris', 'Jan. 2010' );talk('2009-10-21-porquerolles.pdf', 'Total Variation Projection: Algorithms and Applications (with M. Comte, G. Carlier, J. Fadili and I. Ionescu)', 'GDR MOA meeting, Porquerolles', 'Oct. 2009' );talk('2009-10-itw09.pdf', 'Chalenging Restricted Isometry Constants with Greedy Pursuits (with Charles Dossal and Jalal Fadili)','ITW 2009, Taormina, Italia', 'Oct. 2009' );talk('2009-09-21-mit.pdf', 'Sparse Geometric Image Processing', 'MIT PDE seminar, Boston', 'Sept. 2009' );talk('2009-09-08-gretsi-oscilating.pdf', 'Modeling Locally Parallel Textures (with Pierre Maurel and Jean-Francois Aujol)',	conf('http://www.gretsi2009.org', 'Gretsi\'09', 'Dijon'), 'Sept. 2009' );talk('2009-09-08-gretsi-geodesic.pdf', 'Image Compression with Geodesic Anisotropic Triangulations (with Laurent Cohen and Sebastien Bougleux)','<a href="http://www.gretsi2009.org">Gretsi\'09</a>, Dijon', 'Sept. 2009' );	talk('2009-09-08-gretsi-tv-projection.pdf', 'Total Variation Projection with First Order Schemes (with Jalal Fadili)', '<a href="http://www.gretsi2009.org">Gretsi\'09</a>, Dijon', 'Sept. 2009' );talk('2009-04-06-spars09', 'A numerical exploration of Compressed Sampling Recovery (with Charles Dossal and Jalal Fadili, talk given by Charles)',  '<a href="http://spars09.inria.fr/">SPARS\'09</a>, Saint Malo', 'April 2009');talk('2009-04-01-ihp-imaging.pdf', 'From Compressive Sampling to Compressive Computing (with L. Demanet)',   '<a href="http://www.cmap.polytechnique.fr/~ammari/seminaire.htm">IHP Imaging Seminar</a>, Paris', 'April 2009');talk('2009-03-17-creusot.pdf', 'Sparse Geometric Processing',  '<a href="http://multiresolution.liris.cnrs.fr/">Ecole Analyse Multiresolution</a>, Le Creusot',  'March 2009');talk('2008-11-25-lumini.pdf', 'Analysis and Synthesis of Turbulent Textures',  '<a href="http://wwwafa.lille.ensam.fr/Luminy2008/">SMAI-AFA Meeting, Lumini</a>', 'Nov. 2008');talk('2008-09-10-ucl-cwc.pdf', 'Compressive Wave Computation',  '(with <a href="http://math.stanford.edu/~laurent/">L. Demanet</a>) ' . '<a href="http://www.uclouvain.be/en-core.html">UCL, Louvain-La-Neuve, Belgique</a>', 'Sept. 2008');talk('2008-06-23-isis-pbinverses.pdf', 'Non-local Regularization of Inverse Problems',   '<a href="http://www-isis.enst.fr/rilk/gdr/ReunionListe-481">GDR ISIS inverse Problems meeting, ENST, Paris</a>', 'July 2008');talk('2008-06-01-epfl.pdf', 'Manifold Models for Natural Images and Textures',  '<a href="http://lts2www.epfl.ch/">EPFL Image Processing Seminar, Lausanne</a>', 'June 2008');talk('2008-05-28-gif.pdf', 'Adaptivity for Natural Images and Texutres Representations', 	'<a href="http://www.unic.cnrs-gif.fr/">Think Tank Meetings, Gif sur Yvettes,</a>', 'May 2008');talk('2008-04-08-bordeaux.pdf', 'Riemannian Metrics for Vision and Graphics', '(with <a href="http://www.ceremade.dauphine.fr/%7Ecohen/">L.Cohen</a> and <a href="http://www.ceremade.dauphine.fr/%7Ebougleux/">S. Bougleux</a>), ' .	'<a href="http://www.math.u-bordeaux1.fr/~yger/JourneesSignal.htm">Journ&eacute;es signal, image, tomographie, Bordeaux</a>', 'April 2008');talk('2008-04-02-orleans.pdf', 'Texture Synthesis with Grouplets', 'Workshop image, Orleans', 'March 2008');talk('2008-03-10-ihp.pdf', 'Sparse Representations in Image Processing', 'Cours IHP, Paris', 'March 2008');talk('2008-01-17-cnes.pdf', 'Sparse Representations of Geometric Images and Textures', 'CNES, Toulouse', 'Jan. 2008');talk('2007-12-20-lille.pdf', 'Geometric Image Processing with Bandlets', 'Lille applied maths seminar', 'Dec. 2007');talk('2007-12-11-certis.pdf', 'Geodesic Processing of Shapes and Surfaces (with L. Cohen</a>)', 'Certis, Ponts et Chauss�es', 'Dec. 2007');talk('2007-11-12-ensta.pdf', 'Geodesic Surface Processing', 'Introduction to numerical methods for moving boundaries (with L. Cohen), Ensta, Paris', 'Nov. 2007');talk('2007-11-07-la-rochelle.pdf', 'An Introduction to Geometric Image Processing', 'ENCRE08, La Rochelle', 'Nov. 2007');talk('2007-10-24-rennes.pdf', 'Texture Modeling with Adaptive Sparse Representations', 'IRISA Seminar, Rennes', 'Oct. 2007');talk('2007-09-05-cirm.pdf', 'Analysis and Synthesis of Geometric Textures', 'Mathematical Image Processing Metting, Marseille', 'Sept. 2007');talk('2007-08-28-spie07-compressed-sensing.pdf', 'Bandlets Meet Compressed Sensing', 'SPIE  Wavelet XII, San Diego', 'Aug. 2007');talk('2007-08-28-spie07-mca-learned.pdf', ' Learning Adapted Dictionaries for Geometry and Texture Separation (with J. Fadili and J.L. Starck)', 'SPIE Wavelet XII, San Diego', 'Aug. 2007');talk('2007-07-18-slides-iciam07.pdf', 'A Microlocal Viewpoint of Rendering (with L. Demanet)', 'ICIAM07, Zurich', 'July 2007');talk('2007-07-10-snowbird-l1-recovery.pdf', 'A New Condition for Exact L1 Recovery (with C. Dossal)', 'Sparse Approximation Symposium, Snowbird', 'July 2007');talk('2007-06-05-slides-smai07.pdf', 'Analysis and Synthesis of Locally Paralell Textures (with E. Simoncelli)', 'SMAI07,  Praz sur Arly', 'June 2007');talk('2007-05-slides-ssvm07-sparsity-textures.pdf', 'Sparse Modeling of Textures', 'SSVM07, Ischia, Italia', 'May 2007');talk('2007-05-slides-ssvm07-compressed-sensing.pdf', 'Best Basis Compressed Sensing', 'SSVM07 Ischia, Italia', 'May 2007');talk('2007-06-05-slides-grenoble.pdf', 'The Geometry of Natural Images', 'Inria Rhones Alpes Seminar', 'May 2007');talk('2007-01-ceremade-calc-variations.pdf', 'Data Processing Using Geodesic Methods', 'Groupe de travail, Ceremade, Paris', 'Jan. 2007.');	*/	?>    </ul>  </blockquote></blockquote><?php include "../footer.php" ?>