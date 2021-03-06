<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Specifications Program</title>

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


	<div id="MainArea">
	
		<div id="SideMenu">
		<?php include 'menu/specificationsmenu.php' ?>
		</div>

		<div id="TextArea">
		
		<h1>Roadmap</h1>
		
		<p>Having established a solid set of baseline specifications, the openEHR Foundation and community aims to build on these in order to provide
		more direct value to implementers, clinicians and users of health information systems. Community and vendor involvement is encouraged in all activities. 
		The following describes current goals.</p>
		
		<h2>New and Enhanced Specification</h2>
		<h3>Template Model</h3>
		<p>openEHR Templates have now been in use in the NHS for over a year,
		providing valuable implementation experience. This will be used to inform the
		development of open specifications and schemas for templates, including
		additions to the ADL language supporting specialisation and templating; the
		Template Definition Model (TDM; an object model of template definitions) and a
		Template Definition Model Schema (.xsd of the TDM).</p>

		<h3>openEHR / Snomed CT integration</h3>
		<p>Active work is going on in openEHR and within UK NHS Connecting for
		Health to define technical binding approaches for Snomed CT and
		openEHR archetypes and templates. This work is aimed at solving a
		number of challenges, including how to determine the correct set of attributes
		when designing coded data points in an archetype and how to map a
		post-coordinated code expression to a number of data points in an archetype.</p>
		<p>A terminology subsetting language created by Ocean Informatics for its
		terminology server is being offered to IHTSDO as a basis for an open language
		used to define dynamic subsets. openEHR will adopt the result of this
		collaboration with IHTSDO as its terminology subset language, which will enable
		the creation of reusable subsets of Snomed CT and other terminologies.</p>

		<h3>Virtual EHR (vEHR) and EHR Service Interfaces</h3>
		<p>A number of interface definitions are available from industry for two
		important EHR-related interfaces. The vEHR API is a virtual EHR interface as
		might be used in a middleware component, and offers an integrated programming
		interface to back-end services for a clinical application. It provides access to
		the EHR, demographics, archetypes, templates, terminology, querying and identity
		and security features.</p>
		<p>The EHR Service Interface provides a coarse-grained interface to an EHR
		service, allowing access to EHR Compositions and other top-level EHR objects, as
		well as querying.</p>

		<h3>Care Pathway Support</h3>
		<p>With many base specifications in place and stable in openEHR, new
		work will concentrate on supporting distributed care pathways. This will provide
		a standardised way of finding and merging distributed medication orders and
		statuses, as well as enable the generation of a map of referrals, admissions,
		discharges and other transfer events.</p>

		<h3>Data Retrieval and Querying</h3>
		<p>There is a growing emphasis on querying and data retrieval. <em>open</em>EHR
		has been designed from the outset to ensure that data is queryable based on
		archetype paths. Archetypes paths act like dependable identifiers for data
		values, while also providing direct implementation support, due to being
		Xpath-compatible. A new querying language, Archetype Query Language (AQL) has
		already been <a title="Publications on Archetypes" href="../resources/publications">described</a> in MedInfo 2007 (under its
		working name of EQL), and is already in extensive use in one openEHR
		implementation. Further development is planned in order to add the capability of
		terminology subset-based querying, so as to support proper inferential queries.
		</p>


		<h2>Implementation</h2>
		<h3>Operational Templates</h3>
		<p>An Operational Template in openEHR is generated by evaluating a
		Template Definition along with the archetypes and terminology it references, to
		produce a single resulting 'template', which is the equivalent of a single large
		archetype. This is used directly at runtime in openEHR systems as well
		as being the precursor for data capture forms (including using various XML
		formalisms such as XAML, XForms), and as the input of Template Data Schemas (see
		below).</p>

		<h3>Template Data Schema (TDS)</h3>
		<p>The concept of the Template Data Schema is new in openEHR, and
		provides a greatly improved capability for integration. The standard approach to
		openEHR templates is to express them in a generic formalism, which has
		an associated generic XML schema. However with a single transform, a TDS can be
		generated for each template. The resulting schema is hard-wired to the
		template's contents, and suited for XML data transformation and communication,
		for example as a message. This allows data sources such as pathology
		laboratories to generate their content according to schemas directly describing
		their result types, without having to understand openEHR. The same
		logic follows for any kind of content. The TDS approach holds great promise for
		integration because any data that conforms to&nbsp; TDS .xsd in the standard XML
		fashion is guaranteed to be convertible to standard openEHR content
		format. The capability of producing TDSs from templates is effectively a
		facility for machine-generation of message definitions, replacing previous
		manual message definition approaches.</p>

		<h3>Template and Schema for the ASTM Continuity of Care Record (CCR)&nbsp; and HL7
		CCD</h3>
		<p>A template definition and schema will be created for the ASTM CCR, showing
		how convenient this is to model and use in openEHR systems.</p>
		<br/>
		<p><a href="http://www.openehr.org/issues/browse/SPEC?report=com.atlassian.jira.plugin.system.project:roadmap-panel">Jira roadmap</a></p>
		
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
