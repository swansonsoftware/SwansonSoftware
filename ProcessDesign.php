<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<title>Swanson Software - Software Design</title>
	<link rel="stylesheet" href="styles/swansonsoftware.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="javascript/debug.js"></script>
	<script src="javascript/swansonSoftware-v1.1.js"></script>

</head>

<body>
<a id="top"></a>

<div id="header" class="row">
    <div class="col-3" style="padding:0">
    <?php include "logo.php"; ?>
    </div>

    <div class="col-17">
        <span id='PageTitle' class='PageTitle'>Process</span>
    </div>
</div>

<div class="row">

    <?php include "nav.php"; ?>


    <div class="col-17 section" id="section">
    <section id="printable">

        <span id="articleHeader">
        <a href="index.php">SwansonSoftware Home</a> > <a href="IntroProcess.php">Process</a> > Software Design 
        <a href="javascript:doPrint();" style="text-align:right;float:right;">Print</a>
        </span>

<h1 class="center">Software Design</h1>
<p>
Draft Version 0.9, December 3, 2005
<br />
<i>Gregory Swanson</i>
</p>

<h1 class="center">Contents</h1>

    <ol class="contents">
        <li><a href="#lst1">1. Introduction</a></li>
        <li><a href="#lst2">2. Overview</a>
            <ol class="contents">
                <li><a href="#lst2.1">2.1 Design Models</a></li>
                <li><a href="#lst2.2">2.2 Design Methods</a></li>
                <li><a href="#lst2.3">2.3 Transfer of Knowledge</a></li>
                <li><a href="#lst2.4">2.4 Anticipating Change</a></li>
                <li><a href="#lst2.5">2.5 Software Designers</a></li>
            </ol>
		</li>
        <li><a href="#lst3">3. Elements of Design Quality</a>
            <ol class="contents">
                <li><a href="#lst3.1">3.1 Simplicity</a></li>
                <li><a href="#lst3.2">3.2 Modularity</a>
					<ol class="contents">
						<li><a href="#lst3.2.1">3.2.1 Coupling</a></li>
						<li><a href="#lst3.2.2">3.2.2 Cohesion</a></li>
		            </ol>
				</li>
                <li><a href="#lst3.3">3.3 Information Hiding</a></li>
            </ol>
		</li>
        <li><a href="#lst4">4. Artifacts</a>
            <ol class="contents">
                <li><a href="#lst4.1">4.1 Diagrams</a></li>
            </ol>
		</li>
        <li><a href="#lst5">5. Methodologies</a></li>
        <li><a href="#idRef">References</a></li>
    </ol>

<!--*******************************************************************************-->

<a id="lst1"></a>

<h2 class="count">Introduction</h2>

<p>
This paper presents the principles underlying software design and the major design practices.
</p>

<p>
Software design varies in formality according to an organization's culture and the size of
 a project. Sometimes the design work is very informal, and is done at the keyboard as
 the program code is typed in (McConnell, 1993). In this case the source code serves as the
 design.  Other times, the design work is part of a more extensive software engineering process,
 where other activities may support the design work (e.g. requirements analysis, design
 inspections, etc.). In this case the design is written down using a design notation, possibly
 with a specialized program, and is usually put under version control.
</p>

<p>
In all cases software design is a "problem-solving task" and a "highly-creative process"
 (Budgen, 2003, p. 18, 32). Budgen makes a case that design is not an analytical process,
 and that it is not like the scientific approach to problem solving (ibid. p. 32). Consequently
 there may be several acceptable design solutions (ibid. p. 19).
</p>

<p>
On the other hand, scientific methods applied to physical processes can reduce a problem to
 smaller parts, and an analysis of the accumulated data will show a convergence that points
 to a single solution (ibid. p. 20). Software design rarely converges; in fact, the opposite
 is typical. This is because software design problems have the characteristics of "wicked"
 problems (ibid. p. 19). Some characteristics of 'wicked' problems are:
</p>

    <ul>
        <li>A solution tends to change the problem</li>
        <li>No definitive problem description exists</li>
        <li>There are no definitive problem solution criteria</li>
        <li>No test of the solution exists</li>
        <li>The only solutions possible are good or bad, not correct or incorrect</li>
    </ul>

<p>
Understanding that several acceptable design solutions may exist, the goal of design becomes
 a goal to find the best solution. The best solution for a software design is the least complex
 solution (Yourdon and Constantine, 1979). Such a design minimizes the greatest
 cost factors of software development: implementation, maintenance, and modification. Finding
 the "best solution" requires a way to quantify quality in design: i.e. we need the attributes
 of quality and a means of assessing them (Budgen p. 75).
</p>

<p>
Budgen argues that the underpinning principles of design quality have changed little since their
 introduction during the 1970's (ibid. p. 445). However, the pace of change in software technologies
 increased and the demand for faster delivery put pressure on software professionals to find
 faster ways of doing things. Budgen found this to be a major influence in the rise of agile
 methods (ibid. p. 443). Another influence on design practice is the idea of market strategy,
 in which competition for market space and other non-technical factors influence a design.
 He concludes, however, that the most important new idea in software design is the emergence
 of architectural style (ibid. p. 446).
</p>

<p>
Each design methodology includes a set of graphical symbols for representing and archiving
 design data. There is no theoretical model that describes design notations, nor are there any
 "empirical investigations" that can be used to determine when to use a particular form or how
 a particular form should be used (ibid. p. 445). Even the relatively new Unified
 Modeling Language (UML), which has wide support, leaves plenty of ambiguity in a design: you
 cannot guarantee that two programmers will produce the same code from a UML diagram.
</p>

<!--*******************************************************************************-->


<a id="lst2"></a>
<h2 class="count">Overview</h2>

<p>
This paper attempts to show what software design is and how it is done. We start by stating
 that design is simply "a problem-solving task" and that a software design describes how
 requirements (e.g. in a requirements specification) are to be met (ibid. p. 18).
</p>

<p>
Probably the best description of design as it applies to software is found in Budgen (ibid.).
 He assembles work from both inside and outside the software industry to show how design is
 used to solve problems, and how software design differs from design in other engineering
 disciplines.
</p>

<p>
Budgen does a good job of building a case showing how software design is different and more
 difficult than design in other engineering disciplines, which he summarized into four
 main characteristics (ibid. p. 16):
</p>

<ul>
	<li>The degree of specialization in software is lower than in other fields</li>
	<li>Software designers usually need to acquire the necessary domain knowledge</li>
	<li>A software design represents a process, which requires elements that describe behavior and functions.</li>
	<li>A software design cannot be expressed by one drawing, there must be several viewpoints.</li>
</ul>

<p>
Clearly, we need tools that can improve the situation. Budgen argues that the most practicable
 tools available are (ibid. p. 18):
</p>

<ul>
	<li>Design methods and patterns - Budgen shows that when domain knowledge is lacking, these are the two options (other than experience) to acquire it.</li>
	<li>Representations (e.g. models, prototypes)</li>
	<li>Abstraction (i.e. a logical model such as one created in a UML diagram)</li>
</ul>

<p>
Missing from the list is the CASE tool. While CASE tools may have the capability to check a design
 for "consistency and completeness," these tools are not yet capable of assessing the degree to
 which a design addresses the requirements of a system (ibid. p. 447).
</p>

<a id="lst2.1"></a>
<h3 class="count subhead">Design Models</h3>

<p class="subhead">
Design models have a fundamental role in software design (ibid. p. 23, paraphrased):
</p>

<ul>
	<li>They allow the designer to predict a system's behavior under different conditions</li>
	<li>They allow the design to be expanded in a systematic way towards a detailed, complete design</li>
	<li>They help in the transfer of knowledge</li>
	<li>Practices for their description, construction, and elaboration are fundamental to software design.</li>
</ul>

<p>
There are two design models.  Each design method belongs to one of the two models:
</p>

<ul>
	<li>Graphical, a.k.a. systematic methods</li>
	<li>Mathematical, a.k.a. formal methods</li>
</ul>


<a id="lst2.2"></a>
<h3 class="count subhead">Design Methods</h3>
<p class="subhead">
A design method - whether graphical or mathematical - consists of two major components (ibid. p. 34):
</p>

<ul>
	<li>A representation - the symbols and diagrams that model and describe the structure of a solution. A representation usually includes both concrete and abstract properties of design objects</li>
	<li>A process - the steps or procedures required to implement a design. A software design process derives from theory, principles, and heuristics.</li>
</ul>


<p>
In addition to these two major components, most design methods include a "set of heuristics" that
 gude process activities for specific types of problems (ibid. p. 34).
</p>

<p>
Representations are useful in their ability to convey domain knowledge by illustrating concepts
 such as information flow and operations. Software design processes are useful in their ability
 to guide tasks (despite a lack of theoretical underpinnings that explain why this is). Such
 tasks include:
</p>

<ul>
	<li>Identification of the design actions to be performed</li>
	<li>Use of the representation forms</li>
	<li>Procedures for making transformations between representations</li>
	<li>Quality measures to aid in making choices</li>
	<li>Identification of particular constraints to be considered</li>
	<li>Verification/validation operations</li>
</ul>

<a id="lst2.3"></a>
<h3 class="count subhead">Transfer of Knowledge</h3>
<p class="subhead">
One of the main benefits of design representations is that they serve as a tool for knowledge
 transfer. Other uses for design documents are 1) they record design decisions and (ideally)
 the rationale behind them; 2) they serve as a reference during construction and maintenance.
 It is typical that software designs are written down for large, more formal projects but not
 for most smaller projects. This is the source of many problems.</p>

<p>
When the design is not available in hard copy or electronic form, there is no vehicle for
 knowledge transfer. When new employees have questions about an application's design, they must
 rely on current employees for answers. There is a tendency to lose track of design decisions
 when they are not written down. This increases maintenance cost. When a system's
 design is not available, testing is hampered because there is no document specifying
 functionality that should be tested.
</p>

<p>
Recording of design decisions usually does not (but should) include the rationale behind the
 decision (ibid. p. 39). Budgen notes that the design audit (a.k.a. design inspection) encourages
 recording of design rationale.
</p>


<a id="lst2.4"></a>
<h3 class="count subhead">Anticipating Change</h3>

<p class="subhead">
Systems that evolve require more forethought in the design stage. Budgen cites the work of Lehman
 and Ramil (2002) who found that there are generally two kinds of systems (ibid. p. 58):
</p>
<ul>
	<li>Those that evolve - these are used to "mechanise a human or societal activity."</li>
	<li>Those that are static - these meet some "formal specification."</li>
</ul>

<p>
Even formal specifications can change from time to time. Parnas (1979) argues that a design should
 be based on the assumption that there will be a need to make changes to the product sometime.
</p>

<a id="lst2.5"></a>
<h3 class="count subhead">Software Designers</h3>
<p class="subhead">
A single person may be responsible for a design, or a team may share the responsibility. What
 does it take for a person or team to be successful, or even exceptional, at design? Budgen
 cites work by Curtis et. al. (1988) who found that exceptional designers possess three
 characteristics (ibid. p. 32):
</p>
<ul>
	<li>They are familiar with the application domain, which allows them to see solutions for problems more easily.</li>
	<li>They are good at communicating their technical vision, often by simply interacting.</li>
	<li>They identify with project performance.</li>
</ul>

<p>
One skill that is often missing in exceptional designers: good programming skills.
</p>

<p>
When design is performed by a team, coordination of design tasks and dividing the product are
 additional complications (Budgen p. 40). There are two kinds of team organization:
</p>
<ul>
	<li>Hierarchical - a chief designer makes the final decision on all design questions. Other team members perform a supporting role and may have specialized roles. This approach is seldom taken because of the lack of capable designers to fill the chief role.</li>
	<li>Non-hierarchical ("egoless peers") - different team members take the lead when the need for specific specialization arises.</li>
</ul>

<p>
Research in the psychology of teams has found:
</p>
<ul>
	<li>Productivity begins to suffer when team size grows above 10-12 members.</li>
	<li>Team members who possess the greatest domain knowledge exert more influence.</li>
	<li>There are organizational issues within a company that impact the quality of the design.</li>
</ul>


<!--*******************************************************************************-->
<a id="lst3"></a>
<h2 class="count">Elements of Design Quality</h2>

<p>
In order to measure design quality we need to know what the quality factors are and we need
 methods to measure them. Budgen described a group of quality factors (ibid. p. 70):
</p>

<ul>
	<li>reliability</li>
	<li>efficiency</li>
	<li>maintainability</li>
	<li>usability</li>
	<li>testability</li>
</ul>

<p>
Measures of design quality, to which the above quality factors are applied, include:
</p>
<ul>
	<li>Simplicity</li>
	<li>Modularity - coupling and cohesion</li>
	<li>Information hiding</li>
</ul>

<a id="lst3.1"></a>
<h3 class="count subhead">Simplicity</h3>
<p class="subhead">
Simplicity of design means it includes nothing more than what is essential. Simplicity is a
 measure of maintainability and testability, and to a lesser degree reliability and possibly
 efficiency (ibid. p. 76). Design simplicity is usually described in terms of complexity:
</p>
<ul>
	<li>control flow - the number of paths of code execution in a program unit (i.e. a block of code, a function, etc.)</li>
	<li>information flow - how complex the structure is with respect to information flow</li>
	<li>comprehension - indicated by the number of different identifiers and operators.</li>
	<li>complexity of relationships between structural elements</li>
	<li>relationships between system elements - another kind of structural complexity that is usually encountered in object-oriented forms.</li>
</ul>

<p>
These ideas are examined more thoroughly in other work. For example, Yourdon and Constantine (1979)
 describe factors of complexity, what they call "complexity in human terms" (p. 73): 1) size of
 a module; 2) number of decision-making statements; 3) span of data elements (e.g. between uses
 of a variable); 4) span of control flow (e.g. between an entry point and exit point). In summary,
 Yourdon and Constantine find that complexity is determined by:
</p>
<ul>
	<li>"the <i>amount</i> of information that must be understood correctly"</li>
	<li>"the accessibility of the information"</li>
	<li>"the structure of the information."</li>
</ul>

<p>
Yourdon and Constantine state that their discussion of complexity focuses on intermodular
 interfaces (ibid. p. 74). Furthermore, they confine their definition of "amount of information" to
 the number of arguments passed in a call to a routine. I.e., the intermodular interface.
</p>

<p>
Yourdon and Constantine describe "accessibility of the information" as applying to the use of the
 interface: what a programmer must know to interpret the code. They give four factors (ibid. p. 76):
</p>

<ol>
	<li>Direct vs. indirect access to information
		<ul>
			<li>More complex: the information refers indirectly to some other data element.</li>
			<li>Less complex: the information can be accessed directly by the programmer.</li>
		</ul>
	</li>

	<li>Local vs. remote presentation of data
		<ul>
			<li>More complex: the information is remote from the interface statement.</li>
			<li>Less complex: the information is local (i.e. presented with) the interface statement.</li>
		</ul>
	</li>

	<li>Standard vs. unexpected presentation of information
		<ul>
			<li>More complex: the information is presented in an unexpected manner.</li>
			<li>Less complex: the information is presented in a standard manner.</li>
		</ul>
	</li>

	<li>Nature of the interface
		<ul>
			<li>More complex: the nature is obscure.</li>
			<li>Less complex: the nature is obvious.</li>
		</ul>
	</li>
</ol>

<a id="lst3.2"></a>
<h3 class="count subhead">Modularity</h3>

<p class="subhead">
Modularity of design means the extent to which it is divided into components that
</p>
<ul>
	<li>are complete (i.e. can be used in another application without modification)</li>
	<li>relate to the problem solution</li>
</ul>

<p>
Modularity is measured in terms of coupling and cohesion. Modularity is a measure of
 maintainability, testability, and possibly usability and reliability (Budgen 2003, p. 77).
</p>

<a id="lst3.2.1"></a>
<h4 class="count subhead">Coupling</h4>
<p class="subhead">
Coupling is a measure of the type and strength of connections
 between modules. Highly coupled modules have strong interconnections, loosely coupled
 modules have weak interconnections. Uncoupled modules have no interconnections.
 A programmer who is coding, debugging or modifying one of two (or more) highly-coupled
 modules will encounter a higher probability that changes will be required in the other
 modules as well. Coupling is a relative measure indicated by four factors (Yourdon
 and Constantine 1979, p. 86); in decreasing magnitude of effect on coupling:
<ul>
	<li>The nature of the connection between modules (ibid.
		p. 88)
	<ul>
		<li>Minimally connected (least coupling)</li>
		<li>Normally connected (somewhat higher coupling)</li>
		<li>Pathologically connected (highest coupling). These connections prevent us from understanding how a module works without understanding something about the program it's in.</li>
	</ul>
	</li>
	<li>How complex the interface is (in human terms)</li>
	<li>The type of information flow along the connection</li>
	<li>Binding time of the connection.</li>
</ul>

<p>
From a quality perspective, we are concerned mostly with the type of information
flow. Yourdon and Constantine (ibid.) describe forms of coupling in detail but
their work is less accessible today because their examples use machinery like paper
tape readers and punch cards as input, punched tape as output, and they refer
to language constructs that are no longer mainstream. McConnell's work (1993) is much
more accessible.
</p>

<p>
There is no standardized empirical measure of coupling, and names of coupling
forms vary from one author to another. However, Budgen states
that knowledge of the presence of particular forms of coupling is more useful to the
designer than the extent of any particular form (2003, p. 78).
</p>

<p class="tableCaption">
Table of coupling forms in decreasing order of desireability (Sources: Yourdon and
Constantine (1979), Martin and McClure (1985), McConnell (1993), Budgen (2003)).
</p>
	<!--<table border="0" cellpadding="2" cellspacing="2">-->
    <table class="tableParentNoCells">
		<tr>
			<th class="tableHeaderNoCells">Yourdon and Constantine</th>
			<th class="tableHeaderNoCells">Martin & McClure</th>
			<th class="tableHeaderNoCells">McConnell</th>
			<th class="tableHeaderNoCells">Budgen</th>
		</tr>
		<tr>
			<td class="tableNoCells">Data coupling or input-output coupling</td>
			<td class="tableNoCells">Data coupling</td>
			<td class="tableNoCells">Simple-data coupling</td>
			<td class="tableNoCells">Data coupling</td>
		</tr>
		<tr>
			<td class="tableNoCells">Not mentioned</td>
			<td class="tableNoCells">Stamp coupling</td>
			<td class="tableNoCells">Data-structure coupling</td>
			<td class="tableNoCells">Stamp coupling</td>
		</tr>
		<tr>
			<td class="tableNoCells">Control coupling - activating</td>
			<td class="tableNoCells">Control coupling</td>
			<td class="tableNoCells">Control coupling</td>
			<td class="tableNoCells">Control coupling - activating</td>
		</tr>
		<tr>
			<td class="tableNoCells">Control coupling - co-ordinating</td>
			<td class="tableNoCells">Control coupling</td>
			<td class="tableNoCells">Control coupling</td>
			<td class="tableNoCells">Control coupling - co-ordinating</td>
		</tr>
		<tr>
			<td class="tableNoCells">Common-environment coupling</td>
			<td class="tableNoCells">Common coupling</td>
			<td class="tableNoCells">Global-data coupling</td>
			<td class="tableNoCells">Common-environment coupling</td>
		</tr>
		<tr>
			<td class="tableNoCells">Not mentioned</td>
			<td class="tableNoCells">Content coupling</td>
			<td class="tableNoCells">Content coupling</td>
			<td class="tableNoCells">Not mentioned</td>
		</tr>
	</table>


<p class="h5">Coupling Forms</p>
<p class="subhead">
McConnell (1993) gives a thorough as well as accessible description of coupling, from a
programmer's point of view (p. 87).  In order of decreasing coupling:

<ul>
	<li><b>Content coupling</b></li>
	<li><b>Global-data coupling</b></li>
	<li><b>Control coupling</b></li>
	<li><b>Data-structure coupling</b></li>
	<li><b>Simple-data coupling</b></li>
</ul>

<a id="lst3.2.2"></a>
<h4 class="count subhead">Cohesion</h4>
<p class="subhead">
Cohesion is a measure of the functional relatedness of the
 components of a module (Yourdon and Constantine 1979, p. 106; Budgen 2003, p. 78).
 Cohesion is directly related to a module's relation to the problem solution (Yourdon and
 Constantine 1979, p. 106). I.e. as cohesion increases, overall complexity decreases.
</p>

<p class="tableCaption">
Table of cohesion forms in decreasing order of desireability (McConnell places
temporal cohesion above procedural cohesion (1993 p. 83). Sources: Yourdon and
Constantine (1979), Martin and McClure (1985), McConnell (1993), Budgen (2003)).
</p>
	<table class="tableParentNoCells">
		<tr>
			<th class="tableHeaderNoCells">Yourdon and Constantine</th>
			<th class="tableHeaderNoCells">Martin & McClure</th>
			<th class="tableHeaderNoCells">McConnell</th>
			<th class="tableHeaderNoCells">Budgen</th>
		</tr>
		<tr>
			<td class="tableNoCells">Functional</td>
			<td class="tableNoCells">Functional</td>
			<td class="tableNoCells">Functional</td>
			<td class="tableNoCells">Functional</td>
		</tr>
		<tr>
			<td class="tableNoCells">Sequential</td>
			<td class="tableNoCells">Sequential</td>
			<td class="tableNoCells">Sequential</td>
			<td class="tableNoCells">Sequential</td>
		</tr>
		<tr>
			<td class="tableNoCells">Communicational</td>
			<td class="tableNoCells">Communicational</td>
			<td class="tableNoCells">Communicational</td>
			<td class="tableNoCells">Communicational</td>
		</tr>
		<tr>
			<td class="tableNoCells">Procedural</td>
			<td class="tableNoCells">Procedural</td>
			<td class="tableNoCells">Temporal</td>
			<td class="tableNoCells">Procedural</td>
		</tr>
		<tr>
			<td class="tableNoCells">Temporal</td>
			<td class="tableNoCells">Temporal</td>
			<td class="tableNoCells">Procedural</td>
			<td class="tableNoCells">Temporal</td>
		</tr>
		<tr>
			<td class="tableNoCells">Logical</td>
			<td class="tableNoCells">Logical</td>
			<td class="tableNoCells">Logical</td>
			<td class="tableNoCells">Logical</td>
		</tr>
		<tr>
			<td class="tableNoCells">Coincidental</td>
			<td class="tableNoCells">Coincidental</td>
			<td class="tableNoCells">Coincidental</td>
			<td class="tableNoCells">Coincidental</td>
		</tr>
	</table>


<p class="h5">Cohesion Levels</p>
<p class="subhead">
Cohesion levels are determined by seven distinct associative principles. In order
of increasing cohesion they are:
</p>

<ul>
	<li><b>Coincidental Cohesion</b>
		<p>
		Elements (lines of code) in a coincidentally-cohesive module have no relationship.
		Typically occurs as the result of modularizing existing code, to separate out redundant
		code (Yourdon and Constantine 1979, p. 109).
		</p>

		<p>
		Yourdon and Constantine (ibid.) take an example where a programmer following structured
		techniques ends up with duplicated code in many places. To reduce the duplication and
		create a more compact program, the programmer replaces the duplicate code with function
		calls, and puts the code in a separate module or modules. These modules and the functions
		within have no relationship to each other, and are coincidentally cohesive.
		</p>

		<p>
		Why is this worse than leaving duplicated code alone? It depends - often the modules
		created to reduce duplicated code are not suited for reuse in other applications.
		Another reason is that it becomes a maintenance problem, e.g. when the functionality
		of the routine is not the same each time it is called.
		</p>
	</li>

	<li><b>Logical Cohesion</b>
		<p>
		While the elements of a logically-cohesive routine have some relationship to each other,
		the whole does not perform a function. The elements have a closer tie to the problem
		solution than coincidentally cohesive elements: they perform logically similar
		operations (ibid. p. 114).
		</p>

		<p>
		McConnell (1993) describes an example of logical cohesion where the operations in a
		function are separated by some control structure, and the set that executes is determined
		by a control flag that's passed in the parameter list.
		</p>
	</li>

	<li><b>Temporal Cohesion</b>
		<p>
		Temporally-cohesive elements are related by time. E.g. all of the elements execute
		to perform some operation in a given time period, such as start up or shut down. This
		is also logical cohesion - the elements are related to each other.
		</p>

		<p>
		Yourdon and Constantine found that whenever you have logical cohesion without temporal
		cohesion, such code is usually "tricky, obscure, or clumsy code which is difficult to
		maintain and modify" (1979, p. 116).
		</p>
	</li>

	<li><b>Procedural Cohesion</b>
		<p>
		Procedurally-cohesive operations are related by elements of processing such as
		looping or a decision process; a simple sequence of steps also relates elements of
		processing.
		</p>

		<p>
		Yourdon and Constantine describe a design process where a flowchart of a process is used
		to determine where it should be separated into routines and modules. The results varied
		widely and often tended to produce lower cohesion. They discovered that higher forms of
		cohesion resulted when data relationships were separated from control features
		(ibid. p. 117).
		</p>

		<p>
		Procedural cohesion typically results when using models of a process to determine
		code module structure. Modules that have procedural cohesion typically contain only
		part of a function, an entire function and parts of other functions, parts of several
		functions, or even a single function (ibid. p. 118). Sometimes a procedurally-cohesive
		module that performs a distinct task is acceptable, in terms of ease of maintenance
		and ties to problem structure.
		</p>
	</li>

	<li><b>Communicational Cohesion</b>
		<p>
		Communicational cohesion is the lowest type of cohesion where processing elements
		have a structural relationship to the problem. McConnell (1993) gives a description
		where all operations make use of the same data and the order in which those operations
		occur is not important. There is no single name that clearly describes the function.
		</p>
	</li>

	<li><b>Sequential Cohesion</b>
		<p>
		Sequential cohesion describes the situation where the flow of data proceeds
		sequentially through a set of functions; or, where operations on data proceed
		sequentially through a specific order and the data is shared from step to step,
		and the operations don't make a complete function.
		</p>

		<p>
		All forms of cohesion discussed so far can result from flowchart design, which
		allows confusion of data flow with control flow (Yourdon and Constantine, 1979 p. 126).
		This happens because a single step on a flowchart may represent code from an entire
		function, part of a function, a separate program such as a DLL, etc.
		</p>
	</li>

	<li><b>Functional Cohesion</b>
		<p>
		Functional cohesion is the highest level of cohesion. It describes the case where
		a function does one thing: fulfilling what it's name says it does (ibid. p. 127).
		This brings up the subject of routine names. In the context of cohesion, a routine
		name should be a clear verb - and - object combination.
		</p>
	</li>
</ul>

<p>
A problem with the structured concepts of coupling and cohesion is that they cannot be
 objectively assessed (Yourdon and Constantine p. 132; Budgen p. 78) (though work continues
 in an effort to change this - see for example Bieman and Kang, 1998, or Kramer and Kaindl,
 2004).
</p>

<a id="lst3.3"></a>
<h3 class="count subhead">Information Hiding</h3>
<p class="subhead">
Information hiding means to hide details of data structures inside a module. Only routines that
 are part of the module have direct access to the data structures; routines that are not part
 of the module must call routines within the module to work with the data structures.
</p>

<p>
The term "information hiding" may have originated in the work of Parnas (1972), who describes
 a module as "a responsibility assignment" (p. 1054), which is "characterized by its knowledge
 of a design decision which it hides from all others. Its interface or definition was chosen
 to reveal as little as possible about its inner workings" (ibid. p. 1056).
</p>

<p>
Information hiding is related to the quality factors reliability and maintainability (Budgen
 p. 79).
</p>

<!--*******************************************************************************-->

<a id="lst4"></a>
<h2 class="count">Artifacts</h2>

<p>
The product of software design - also known as implementation design - is the <i>technical
 specification</i>. This document or set of documents usually includes flowcharts to present
 process model, data flow, and process flow cycles; and a form-level hierarchy (i.e. input
 forms and dialogs). The technical specification describes a program's operating environment,
 interfaces, functions, and modules.
</p>

<p>
Several documents fall into the category of design specifications. The particular documents
 you create will depend on the design method you use.
</p>

<a id="lst4.1"></a>
<h3 class="count subhead">Diagrams</h3>
<p class="subhead">
Diagrams give us a way to communicate complex ideas: what we are capable of thinking depends
 on the language we use for thinking (Martin and McClure, 1985 p. 109). Diagrams extend our
 vocabulary, and different kinds of diagrams extend our vocabulary in different ways.
</p>

<p>
Diagrams are tools that communicate information about a system and are thus particularly
 useful for (ibid., paraphrased):
</p>
<ul>
	<li>speeding up work on an application and improving the results</li>
	<li>communicating a design to team members</li>
	<li>enabling maintenance programmers to understand how a system works</li>
	<li>helping during debugging, as a reference when questions arise about how a system is supposed to work.</li>
</ul>

<p>
As better, more rigorous methods for specifying systems are created, new diagramming methods
 will be needed (ibid. p. 110).
</p>

<p>
Diagrams are used in four areas of design (ibid. p. 111):
</p>
<ol>
	<li>System overview</li>
	<li>Program architecture</li>
	<li>Program detail</li>
	<li>Data structure representation</li>
</ol>

<p>
Many of the early diagramming techniques have fallen into disuse. While some have been supplanted
 by newer UML techniques, others have no counterpart in UML. It is worth discussing these, if
 only briefly, because they are still useful. Martin and McClure's review of structured
 diagramming techniques concludes with a recommendation of the best of the techniques before
 UML and object-oriented methods appeared (ibid. p. 396). They recommend:
</p>

<ul>
	<li>Action diagrams</li>
	<li>HOS charts</li>
	<li>Decision tables</li>
	<li>Data flow diagrams</li>
	<li>Entity-relationship diagrams</li>
	<li>Data navigation diagrams</li>
</ul>


<!--
<p>
Software designs should identify three things (McConnell, 1993):
</p>
    <ul>
        <li>subsystems - e.g. the report generator, the calculator; also,
            large software systems have subsystems that need partitioning into smaller
            subsystems.</li>
        <li>modules - subsystems are decomposed to modules, and details
            of the mechanisms whereby modules interact with the system are specified.</li>
        <li>routines - modules are divided into routines. While external
            design entails description of what each function is supposed to do, internal
            design is the responsibility of the programmer.</li>
    </ul>
<br />
-->

<!--*******************************************************************************-->


<a id="lst5"></a>
<h2 class="count">Methodologies</h2>

<p>

</p>

    <ul>
        <li><a href="#dsgn1">Stepwise Refinement</a></li>
        <li><a href="#dsgn2">Incremental Design</a></li>
        <li><a href="#dsgn3">Structured Systems Analysis and Structured Design</a></li>
        <li><a href="#dsgn6">Object-Oriented Design and Object-Based Design</a></li>
        <li><a href="#dsgn7">Component-Based Design</a></li>
    </ul>


<h3 class="subhead">Choosing a Method</h3>
<p class="subhead">
All design methodologies have the same
 goals, but some methods work better on certain kinds of problems than other methods.
 Often you will choose a design method that complements the programming environment. Most
 languages in common use today have object-oriented (OO) capabilities.
</p>

<!-- ******************************************* -->

<a id="dsgn1"></a>
<h3 class="count subhead">Structured Design</h3>

<p class="subhead">
Design principles developed in the area of structured design are not made obsolete by
 principles developed in the area of object-oriented (OO) design. Structured design concepts
 such as cohesion and coupling describe fundamental characteristics of all software that
 has routines or modules.
</p>

<p>
Structured design is based on theories developed by Bohm and Jacopini (1966; Yourdon and
 Constantine, 1979, p. 73). Yourdon and Constantine describe structured design as "a
 collection of guidelines for distinguishing between good designs and bad designs, and a
 collection of techniques, strategies, and heuristics that generally leads to good
 designs..." (p. 15).
</p>

<p>
In the quest for the least complex design, they present a body of evidence that shows
 that the least complicated design consists of small modules that are relatively
 independent of each other but that relate easily to the application (ibid. p. 29). Two
 principles of structured design help focus the design effort to achieve these
 characteristics:
</p>
<ul>
	<li>"Highly interrelated parts of the problem should be in the same piece of the system, i.e. things that belong together should go together.</li>
	<li>"Unrelated parts of the problem should reside in unrelated pieces of the system. That is, things that have nothing to do with one another don't belong together (ibid. p. 21).</li>
</ul>

<p>
The unit of structured design is the function. Structured methodologies apply strategies and
 tools that help you
</p>
<ol>
	<li>identify and isolate pieces of a system</li>
	<li>iteratively apply the techniques until the design is complete.</li>
</ol>

<p>
Structured design emphasizes two approaches:
</p>
<ul>
	<li><b>Top-down decomposition</b> - starting with a drawing that depicts system functions as an upside-down tree of boxes. Work from the most general program function to the specific.</li>
	<li><b>Bottom-up composition</b> - opposite of top-down decomposition, you start with specific lower-level functionality that you are familiar with and work to the general.</li>
</ul>


<h3>Applying the Principles</h3>
<p class="subhead">
Structured design is concerned with relationships between pieces of a system. We refer to
 these pieces as modules, though the term 'module' does not necessarily indicate a group
 of functions. Some qualities of modularity are apparent only in the relationship between
 modules. Y&C introduce the concepts of <i>coupling</i> (p. 85) and
 <i>cohesion</i> (p. 106) for this purpose. These concepts are the theoretical basis of
 structured design and the focus of this section.
</p>

<a id="idRef"></a>
<h3 class="center chapterSep">References</h3>

<p class="references">
<b>Bieman, J. M. and Kang, B-K</b>, 1998, Measuring Design-level Cohesion: IEEE Transactions
 on Software Engineering, v. 24, no. 2, pp. 111-124.
</p>

<p class="references">
<b>Bohm, Corrado and Jacopini, Giuseppe</b>, 1966, Flow Diagrams, Turing Machines and Languages
 with Only Two Formation Rules: Communications of the ACM, v. 9, no. 5, pp. 366-371.
</p>

<p class="references">
<b>Budgen, David</b>, 2003, Software Design (2nd ed.): Pearson Education Limited/Addison-Wesley,
 468 pages.<br />
 ISBN 0-201-72219-4
</p>

<p class="references">
<b>Kramer, S., and Kaindl, H.</b>, 2004, Coupling and Cohesion Metrics for Knowledge-Based
 Systems Using Frames and Rules: ACM Transactions on Software Engineering and Methodology v. 13
 no. 3, pp. 332-358
</p>

<p class="references">
<b>Martin, David and Estrin, Gerald</b>, 1967, Models of Computations and Systems - Evalation
 of Vertex Probabilities in Graph Models of Computations: Journal of the ACM, v. 14, no. 2,
 pp. 281-299.
</p>

<p class="references">
<b><a href="http://www.stevemcconnell.com/" class="generic" target="_top">McConnell, Steve</a></b>,
 1993, Code Complete: A Practical Handbook of Software Construction: Microsoft Press,
 880 pages.<br />
ISBN 1-55615-484-4
</p>

<p class="references">
<b>Martin, J., and McClure, C.</b>, 1985, Structured Techniques For Computing: Prentice-Hall,
 775 pages.<br />
ISBN 0-13-855180-4
</p>

<p class="references">
<b>Meyer, Bertrand</b>, 1997, Object-Oriented Software Construction: Prentice-Hall, 1254 pages.<br />
ISBN 0-13-629155-4
</p>

<p class="references">
<b>Parnas, D. L.</b>, 1972, On The Criteria To Be Used In Decomposing Systems Into Modules:
 Communications ACM, v. 15, no. 12, pp. 1053-1058.
</p>

<p class="references">
<b>Yourdon, Edward and Constantine, Larry L.</b>, 1979, Structured Design: Fundamentals of a
 Discipline of Computer Program and Systems Design: Prentice-Hall, 473 pages.<br />
ISBN 0-13-854471-9
</p>

<p class="references">
<b>Zhu, Hong</b>, 2005, Software Design Methodology: From Principles to Architectural Styles: Butterworth-Heinemann, 368 pages.<br />
ISBN 0-75-066075-9
</p>

        <a id="moveTop" href="#top">Top of page</a>
    </section>
    </div>
</div>

<?php include "footer.php"; ?>

</body>
</html>