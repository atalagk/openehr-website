<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Announcements</title>

	<meta name="description" content="openEHR provides open source specifications and reference implementations of future proof EHR systems">
	<meta name="keywords" content="archetypes, openEHR, EHR, electronic health record, electronic medical record, ADL, reference model, clinical models, healthcare, health informatics, medical informatics, EHR standards, ISO 18308, CEN 13606, health care software, open source software, knowledge modelling, patient-centric">
	<meta name="author" content="Sam Heard, Thomas Beale">
	<meta name="copyright" content="The openEHR Foundation">
	<meta name="design" content="Adriana Danilakova">
	<meta name="distribution" content="Global">
	
	<meta name="rating" content="General">
	<meta name="robots" content="All">
	<meta name="revisit-after" content="15 days">
	<meta name="viewport" content="1024">

	<link rel="stylesheet" href="../../styles/basic.css"  type="text/css">
	<link rel="stylesheet" href="../../styles/programs.css"  type="text/css"> 
	<link rel="stylesheet" href="../../styles/menu.css" type="text/css"> 

	<link rel="home" href="http://www.openehr.org">
	<link rel="bookmark" href="http://www.openehr.org" title="openEHR - Homepage">
	<link rel="index" href="http://www.openehr.org/sitemap">

	<script type="text/javascript" src="../../menu/dropdown.js"></script> 
	
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		<div class="nav">
   		<?php include '../../menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea" style="height:1100px;">
	
		<div id="SideMenu">
		<?php $current = 4; include '../menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h2>Update on openEHR Governance</h2>
			<h6>20. October 2011 | from: Sam Heard, Chair of Interim Board of Directors</h6>
			<br/>
			<p>I am writing having taken on the role of Chair of the Board of Directors of openEHR Foundation.
			The new board has met on four occasions and I want to keep you informed of, and get your feedback on,
			the directions we are setting for the Foundation.</p>
			
			<h3>Personal Changes</h3>
			<p>First, I would like to acknowledge and thank Prof. David Ingram who has lead the organisation through its formative years with care
			and attention to detail, always ensuring that the community was open and that all we put forward was based on implementation,
			implementation, implementation. He has taken up a new position as President of the Foundation and remains on the Foundation Board
			during our transition to the new governance arrangements. On behalf of the openEHR community I would like to express our gratitude
			for all he has done and hope that he will remain involved for some years yet.</p>
			
			<h3>IP Assignments</h3>
			<p>The final act of his leadership of the Board has been to get formal IP assignments from Ocean Informatics and University College of all the openEHR
			assets including all archetypes. Software developed and promoted by the Foundation will be issued from now on under the Apache 2 license
			with ownership retained by those developing it. This will ensure it can be used confidently by industry.</p>
			
			<h3>Clinical Information Modelling Initiative</h3>
			<p>The main topic I want to address is the international initiative to develop a
			standardised clinical modelling methodology. This has some IHTSDO secretarial
			support and is led by Dr Stan Huff of Intermountain Healthcare, a former HL7
			Chairperson and co-founder of LOINC, who has been advocating a model-based
			approach for many years. The current approach at Intermountain has been
			influenced by openEHR and uses a two-level modelling approach.</p>

			<p>Stan has established a leadership group through trust and reputation, which
			includes a variety of agencies who have been working in the area and national
			eHealth programs or major initiatives who are interested in consuming the
			models. It has grown out of an HL7 Fresh Look initiative and is currently known
			as the Clinical Information Modelling Initiative (CIMI).</p>

			<p class="par">The group has committed to determining a single formalism for clinical
			modelling and ADL and openEHR are on the list of alternatives which is as
			follows:</p>
			<ul>
				<li>Archetype Object Model/ADL 1.5 openEHR</li>
				<li>CEN/ISO 13606 AOM ADL 1.4</li>
				<li>UML 2.x + OCL + healthcare extensions</li>
				<li>OWL 2.0 + healthcare profiles and extensions</li>
				<li>MIF 2 + tools HL7 RIM &ndash; static model designer</li>
			</ul>
			<br/>
			<p>Proponents of the five different approaches have been presenting to members
			of the group, who have a variety of experience in these matters. Fourteen
			organisations will cast a vote on the formalism to use
			including openEHR, Singapore, Eng NHS, Results 4 Care, HL7, Canada
			Infoway, 13606 Assoc, Tolven, CDISC, GE/Intermountain, US Departments, CDISC,
			SMArt and Mitre.</p>
			<p>The group has also been looking at Governance and IP and coming to much the
			same conclusions as the openEHR Foundation has. Our new governance
			proposal is pretty much in tune with this group&rsquo;s views.</p>
			<p>I would like to make a frank and open proposal to this group and seek support
			from the openEHR community to do so. It goes something like this:</p>
			
			<p>&ldquo;<i>If the CIMI group chooses to use ADL as the formalism then the openEHR
			community is prepared to explore the Foundation governance arrangements with the
			CIMI group and align the two efforts using the structures that are mutually
			agreed.</i></p>
			<p><i>Changes to ADL and the openEHR Reference Model may be part of the process
			to meet the collective needs, and alignment of the shared RM and a reviewed RM
			for ISO 13606 would also be a major goal. ADL 1.5 would be submitted to ISO as
			part of this alignment.&rdquo;</i></p>

			<p>Although some will have doubts, there are compelling arguments to
			use openEHR, particularly from our implementation
			experience. openEHR supports a platform approach and a Service Oriented
			Architecture. The models can be used to specify the same content in service
			interfaces, messages and documents. Terminology suppliers are finding it
			difficult to provide generic terminology with no knowledge of the information
			model and other approaches to post-coordination are fraught with uncertainty.
			Serialisation of openEHR models can be used to support CDA, greenCDA
			and other messaging formats.</p>
			<p>It is a moment of opportunity for growth. I value your feedback.</p>
			<br/>
			<p>Yours sincerely,</p>
			
			<p>Sam Heard<br/>
			Chair of Interim Board of Directors</p>
			<br/>
			<a href="../announcements">>> Back to Announcements</a>
		</div>
			

	</div>

	<div id="BottomMenu">
	<?php include '../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../../panel/bottompanel.php' ?>
	</div>

</div>
	
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>