<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<title>Swanson Software - Language</title>
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
        <span id='PageTitle' class='PageTitle'>Science</span>
    </div>
</div>

<div class="row">

    <?php include "nav.php"; ?>

    <div class="col-17 section" id="section">
    <section id="printable">


        <span id="articleHeader">
        <a href="index.php">SwansonSoftware Home</a> > <a href="IntroScience.php">Science</a> > Language
        <a href="javascript:doPrint();" style="text-align:right;float:right;">Print</a>
        </span>


<h1 class="center">Language</h1>
<p>
Draft Version 0.5, November 10 2003
<br />
<i>Gregory Swanson</i>
</p>

<h1 class="center">Contents</h1>

    <ol class="contents">
        <li><a href="#lst2">1. Fundamentals</a></li>
        <li><a href="#lst3">2. Language Families</a></li>
        <li><a href="#lst4">3. Metalanguage</a></li>
        <li><a href="#lst5">4. Elements of Programming Languages</a></li>
        <li><a href="#idRef">References</a></li>
    </ol>

<!--*******************************************************************************-->

<a id="lst2"></a>
<h2 class="count">Fundamentals</h2>

<p>
Programming languages today are based on concepts identical to the ones spoken languages
 are based on.  This was not the case with early programming languages, which were created
 ad-hoc.  Languages improved when designers applied formal language theory and formal
 semantics.
</p>

<p>
Programming language syntax is usually defined in a formal language such as Extended Backus-Naur
 Form or syntax diagrams. Semantics are much harder to define and are created with the aid of
 an 'abstract machine' to model the computer hardware.
</p>

<p>
Most programming languages belong to a class called <i>context-free languages</i> that are
 easy to parse using a stack. Context-free means that the language's syntax definitions do
 not depend on the context in which syntax elements appear. This makes it possible to generate
 the lexer and parser (parts of the compiler) automatically from lexical specifications and syntax.
 The programs that do this are called, respectively, a lexer generator and a parser generator.
</p>


<h3 class="subhead">Syntax and Semantics</h3>

<p class="subhead">
Open a book about a programming language and scan the contents. You find chapter
 headings like:
</p>
<ul style="margin-bottom:0px;">
   <li>Types, Operators, and Expressions</li>
   <li>Control Flow</li>
   <li>Functions and Program Structure</li>
</ul>
<i>Kernighan and Ritchie, 1988</i>

<ul style="margin-bottom:0px;">
   <li>Scalar Data</li>
   <li>Arrays and List Data</li>
   <li>Control Structures</li>
   <li>Functions</li>
</ul>
<i>Schwartz, Olson, and Christiansen, 1997</i>

<ul style="margin-bottom:0px;">
   <li>Lexical Structure</li>
   <li>Data Types and Values</li>
   <li>Variables</li>
   <li>Expressions and Operators</li>
   <li>Statements</li>
   <li>Functions</li>
</ul>
<i>David Flanagan, 1998</i>

<p>
The similarities are apparent, but so are the differences. At the highest level, a programming
 language consists of:
</p>

<ul style="margin-bottom:0px;">
    <li><b>Syntax</b> - a set of rules that state how language elements may be
        grammatically combined. For example, lexical conventions, statements, and expressions.
        <br />
        <p>
        <i>Syntax errors</i> - When program code fails to correspond to the syntax rules of
        the language, a <i>syntax error</i> occurs. Examples of syntax errors include using
        the wrong number or type of arguments in a function call; using improper capitalization
        of keywords in a case-sensitive language; misspelling a keyword; using comment
        delimiters not supported by the language.
        </p>
    </li>   
    <li><b>Semantics</b> - rules that specify the meaning of groupings of
        syntactic elements. For example, the correct interpretation of every type of statement;
        the order in which computations are performed; the meaning of a name; non-meaningful but
        syntactically correct expressions. 
        
        <p>
        <i>Semantic errors</i> - When the meaning of program text does not make sense in the
        context in which it appears during program execution. Thus, semantic errors are often
        called <i>runtime errors</i> because they often manifest only at runtime. Examples of
        semantic errors include type mismatch - when a program object (e.g. variable) is used
        in the wrong context; using an <i>undefined value</i>, i.e. the value in a variable
        which has not been initialized; attempting to use a method not exposed by a class.
        </p>
    </li>
</ul>

<p class="head">
<i>(The above modified from Fischer and Grodzinsky)</i>
</p>

<h3 class="subhead">High-level Classification</h3>

<p class="head">
If syntax and semantics were all we cared about there might be only one programming language.
 However there are many, and they exist because programs are used in different kinds
 of work. These kinds of work fall into two categories that form our highest-level idea of
 what a program does.
 <i>(ibid)</i>:
</p>
<ul>
	<li>a list of actions that we want a computer to perform using the computer's hardware</li>
	<li>a model of a real or mathematical process that we want a computer to execute using symbols that correspond to objects in the model or process</li>
</ul>

<p>
These two concepts indicate very different fundamental requirements in a language, and
 therefore two major categories of languages. I will refer to these as systems languages
 (first in the above list) and non-systems languages. Requirements for languages in these
 categories differ in terms of level of support for abstraction, capability for implicit
 and explicit communication, capacity for alternate expressions of a process or model, and
 the way data is mapped onto the machine.
</p>

<p>
After writing a few programs with a particular language and getting to know its capabilities,
 a programmer may remark on the language's lack of support to perform certain tasks, or that
 it requires writing lots of code to accomplish. The language lacks the ability to represent
 in a sufficiently abstract way the ideas the programmer needs to communicate.
</p>

<p>
Capacity to abstract ideas using a language is indicated by three qualities of data 
 representation. Systems languages have less capacity in these qualities than do non-systems
 languages (ibid).
</p>
<ul>
	<li><b>semantic intent</b> - the intended meaning of a data object,
		e.g. variable. Languages have mechanisms to ensure that semantic intent is 
		valid and carried out.</li>
	<li><b>explicit vs. implicit declaration</b> - more expressive
		languages have facilities to declare more kinds of data explicitly</li>
	<li><b>coherent vs. diffuse grouping of data</b> - more coherent
		grouping allows referring to an assortment of related data with a single symbol.</li>
</ul>

<h3 class="subhead">Using the Formal Language to Create a Program</h3>

<p class="head">
Source code is read by a program called a <i>parser</i> or <i>compiler</i>. There are several
 stages in the process:
</p>
<ul>
	<li>A program called a <i>lexer</i> uses the lexical rules of the
		language to parse program text into tokens.</li>
	<li>The parser applies the syntax rules (e.g. EBNF form of rules) 
		and parses the tokens into an intermediate form. Objects defined in the program appear
		in a list of symbols and corresponding parse tree that defines the role of each
		symbol.</li>
	<li>A program called a code generator applies assembly code translations
		of the syntax rules in the language's grammer to encode the semantics of each rule,
		and produces object code from the symbol table and parse tree. The object code is
		machine-dependent, in that the assembly code translations are designed for a particular
		machine.</li>
</ul>


<h3 class="subhead">Language Quality</h3>

<p class="head">
Besides <b>semantic clarity</b> - a quality of a language whereby the semantic intent of program
 text is easy to determine - language quality is characterized by the quality and availability of
 its features (ibid):
</p>
    <ul>
        <li><b>Frequency of use</b> - a feature that will be used frequently
            should be convenient to use and its syntax should be clear. Likewise, a feature
            that is used less frequently can be less convenient to use.</li>
        <li><b>Locality of effects</b> - i.e. in both elapsed time during
            execution, and in pages of code. A good language design should allow you to:
            <ul>
                <li>create programs without global variables</li>
                <li>define variables close to their use</li>
                <li>make control structures and routines fit on
                    one or two screens.</li>
            </ul>
            </li>
        <li><b>Enforcement of lexical coherence</b> - this makes the language
            more readable and easier to use. It means related sections of code are physically
            adjacent.</li>
        <li><b>Distinct representation</b> - syntactic items should represent
            only one semantic object. E.g. line numbers in BASIC are multipurpose, a violation
            of this principle.</li>
        <li><b>Too much flexibility</b> - features that provide un-needed
            flexibility and are likely to cause syntactic or semantic errors.</li>
        <li><b>Semantic Power</b> - semantic power in a language gives the
            programmer the ability to easily express a model. Semantic power includes features
            that allow the programmer to impose restrictions on the model, rather than features
            that impose restrictions on the programmer.</li>
        <li><b>Portability</b> - restriction on machine-dependent code constructs
            so that programs written in the language will run correctly when compiled by
            different compilers on different hardware.</li>
    </ul>
<!--*******************************************************************************-->


<a id="lst3"></a>
<h2 class="count">Language Families</h2>

<p>
One must keep in mind that languages are more alike than different, and often belong to more
 than one category. These family classifications are intended to extend the reader's
 vocabulary more than to indicate their differences. This is only a summary of the more
 well-known language categories and is not meant to be thorough.
 <i>(ibid)</i>.
</p>

    <ul>
        <li><b>Interactive languages</b> - Like interactive debugging,
            where you have line breaks and when the execution stops you can modify the code
            and then continue execution using the modified code.
            </li>
        <li><b>Structured languages</b> - these languages have control
            structures that allow writing programs without use of GOTOs.</li>
        <li><b>Strongly typed languages</b> - languages in which objects are
            declared with a name and type. Objects may belong to one type only.</li>
        <li><b>Object-oriented languages</b> - extensions of typed languages,
            but objects may belong to more than one type. Characteristics of these languages
            include support for inheritance, polymorphism, abstraction, and encapsulation.</li>
        <li><b>Procedural languages</b> - languages whose program statements and
            procedure calls are executed in sequence.</li>
        <li><b>Fourth-generation languages</b> - the name 'fourth-generation'
            refers to 'fourth-generation hardware', the personal computer.</li>
    </ul>

<!--*******************************************************************************-->



<a id="lst4"></a>
<h2 class="count">Metalanguage</h2>

<p>
Metalanguage describes the parts of a programming language used to manipulate the language
 rather than data in a program. This section describes the elements usually found in a
 metalanguage, and comments on the tradeoffs due to the way these features are implemented
 <i>(ibid)</i>.
</p>
<ul>
	<li><b>Lexical tokens</b> - these are the smallest unit of a language,
		a mark or series of marks denoting a symbol or a word. When a program is compiled,
		the first operation is to run the code through a lexical analyzer or lexer to
		parse the text into tokens.

		<p>
		When parsing tokens, the lexer follows a set of lexical rules defined by the language.
		Lexical rules describe the tokens supported by a language. Common types include:
		</p>
		<ul style="padding-top:0px;">
			<li>Names - both language-defined and user-defined;
				e.g. identifiers, constants, keywords, variables, structures, records</li>
			<li>Special symbols - e.g. nonalphabetic, nonnumeric
				characters and character strings defined by the language</li>
			<li>Numeric literals - e.g. 1, +3, -1.2E</li>
			<li>Single-character literals - e.g. 'a', "a"</li>
			<li>Multiple-character string literals - e.g. "Some
				error definition"</li>
		</ul>

		<p>
		Rules for delimiting tokens have a huge impact on the language - tradeoffs are
		made in order to
		</p>
		<ul style="padding-top:0px;">
			<li>improve readability of the code</li>
			<li>produce code that is easy to translate and lex</li>
			<li>produce a language more like English</li>
		</ul>
		
	</li>
	<li><b>Statements</b> - denotes an action and some object to perform
		the action on.</li>
	<li><b>Scope</b> - Similar to English where larger units of text
		are called paragraphs, programming languages have a concept of larger units
		of text but refer to them as <i>scopes</i>. This is also referred to as a <i>block
		of code</i>. Languages commonly indicate scope with a pair of marks, one for the
		beginning and another for the end. Variations include
		<ul>
			<li>labeled scope</li>
			<li>unlabeled scope</li>
			<li>labeled end scope</li>
		</ul>

		<p>
		Many languages use a single pair of marks to delimit beginning and end of
		scope in all cases. There are tradeoffs in doing this: the language is easier
		to learn and simpler to translate, but at the price of semantic clarity. For
		example, nesting errors can be misinterpreted as a logic error by the compiler, and
		these are notoriously difficult and time-consuming to debug.
		</p>
	</li>
	<li><b>Comments</b> - Comments allow programmers to describe or
		clarify sections of code with text that is not part of the program. E.g.
		indicating semantic intent of variables, parameters, and obtuse statements or
		sections of code.
		
		<p>
		The kinds of comments permitted in languages today are:
		</p>

		<ul style="padding-top:0px;">
			<li>whole-line</li>
			<li>partial-line, to the right of the comment mark</li>
			<li>partial-line embedded, followed by code</li>
			<li>multiple-line</li>
		</ul>
		
		<p>
		Allowing comments to begin and end anywhere is considered overly-general
		because it is easy to forget or misplace an end marker. This could result in
		a semantically invalid program that compiles, though it would not work
		correctly.
		</p>
	</li>
	<li><b>Metanames</b> - Programming languages include metawords for
		referring to parts of a program. Examples include the '#include' in C/C++, and
		statement labels used with 'GOTO' in some languages.</li>
</ul>
    
<!--*******************************************************************************-->


<a id="lst5"></a>
<h2 class="count">Elements of Programming Languages</h2>


<ul>
	<li><b>Primitive types</b> - the data types included in the
		language.
	
		<p>
		You need some understanding of the
		hardware to really understand primitive types. Such understanding includes
		knowing that computer memory (RAM) consists of bits, bytes and words; that
		bytes are segments of 8 bits; and that words on modern hardware are 4 or 8
		bytes long.
		</p>
		
		<p>
		The most primitive of the primitive data types are bytes and words. All other
		data types are mapped onto these. Computer instruction sets have a few logical
		instructions for operations on bytes and words. These are the logical
		instructions that perform left-shift, and, or, xor, and bitwise complement. The
		other instructions are for use with all other data types, which are represented
		by encodings (e.g. ASCII) mapped onto bit strings of bytes and words.
		</p>

		<p>
		Three physical properties determine how a type's elements are mapped to memory.
		</p>
		<ul>
			<li><b>Encoding</b> - the bit-level format of the data.
				When the encoding is not directly supported by the hardware, it must
				be emulated by software. This is less efficient, and in some cases (e.g.
				floating point arithmetic) the results of the software implementation
				must be thoroughly tested to ensure that it matches a hardware
				implementation.</li>
			<li><b>Size</b> - either in terms of memory (bytes,
				words) or of human-friendly values like the size of an integer.</li>
			<li><b>Structure</b> - there are simple types (types
				that cannot be broken into smaller types) and compound types - types consisting
				of several instances of one type (homogeneous) or of multiple types
				(heterogeneous).  Structure designates the kind and placement of types in a
				type.</li>
		</ul>

		<p>
		Language designers choose a set of primitive types to include in a language, but
		language implementors may choose to support additional types.

	</li>
	<li><b>Objects</b> - things that can be named: variables, constants,
		functions, etc.
		
		<p>
		There are two kinds of object:
		</p>
		<ul style="padding-top:0px;">
			<li><b>Program objects</b> - external to the 
				computer, these embody an object from the real world: a number, character,
				word, string of words, process, etc.</li>
			<li><b>Storage objects</b> - these are contiguous
				cells of memory whose size is defined by the primitive data type represented
				by the storage object.
				<ul style="padding-bottom:0px;">
					<li><b>Variables</b> store pure values. A <i>pure value</i> has the same
						size and structure as the primitive type represented by the variable.
						
						<p>
						Semantics differentiate variables and pure values:
						</p>
						<ul style="padding-top:0px;">
							<li>Variables
								<ul style="padding-bottom:0px;">
									<li>can be allocated</li>
									<li>can be deallocated</li>
									<li>can store values</li>
									<li>value can be retrieved from a variable</li>
								</ul>
							</li>
							<li>Pure values
								<ul style="padding-bottom:0px;">
									<li>cannot be allocated</li>
									<li>cannot be deallocated</li>
									<li>can be manipulated with operators and functions</li>
								</ul>
							</li>
						</ul>
					</li>
					<li><b>Pointer variables</b> store references. A <i>reference</i> is
						the memory address of a storage object.</li>
				</ul>
			</li>
		</ul>
		
		
		<p>
		<b>Initialization and Assignment</b><br />
		Storage objects that have not been initialized or assigned to are said to contain
		<i>garbage</i>, or that the value is <i>undefined</i>.
		</p>
		<ul>
			<li>Initialization - storing a program object in
				a storage object at the time it is created.</li>
			<li>Assignment (destructive) - storing a program
				object in an existing storage object. The previous contents are lost.</li>
			<li>Assignment (coherent) - storing a compound
				program object in a compound storage object. E.g. storing the values of a
				record with one statement.</li>
		</ul>

		<p>
		Assignment is usually designated using an assignment operator such as '=', ':='.
		In some languages assign returns a value, allowing <i>multiple assignment</i>. In
		other languages assign is a statement and the operator cannot be included in the
		middle of an expression.
		</p>

		<p>
		<b>Dereferencing Contents of Storage Objects</b><br />
		Dereferencing - extracting contents from a storage object - is often accomplished
		by merely using the storage object's name. Many languages use context to determine
		when to dereference a storage object. Besides adding complexity to a language, this
		means that a particular name will sometimes be a reference and other times a pure
		value.
		</p>

		<p>
		Operations that dereference storage objects require a reference to the object
		and return a value. When the object reference is a pointer variable, the return
		is another reference. Languages that support pointer expressions provide an
		operator or combined operations to designate a dereference, rather than
		performing the dereference automatically. E.g. C provides the "*"
		</p>

		<p>
		<b>Pointer assignment - dereferencing</b><br />
		In these expressions dereferencing may be automatic (e.g. in Pascal) or the
		language may allow for non-automatic dereferencing (e.g. C provides the "&"
		to prevent automatic dereferencing).
		</p>

		<p>
		Note that language-specific syntax can vary for pointer assignment: right
		side assignments that refer to an array or a function are not dereferenced
		in C.
		</p>

		<p>
		<b>Storage Objects and Memory</b><br />
		The language translator has three strategies to use in managing storage objects:
		static storage, stack storage, and heap storage. Stack and heap storage 
		comprise dynamic storage.
		</p>

		<p>
		<b>Static Storage</b><br />
		Static storage objects - called "immortal" - are allocated before execution
		and remain there until the program terminates. The number of these objects is
		fixed. The kinds of static objects vary by language. Global variables are
		static; some languages (C, Visual Basic) allow nonglobal object declarations
		using the keyword "Static." Usefullness of static local variables over global
		variables is that it prevents accidental change in unrelated routines.
		</p>

		<p>
		<b>Dynamic Storage - Stack</b><br />
		Procedure calls and block structured code give rise to <i>nested lifetimes</i>
		of storage objects.  Storage for these objects is easy to manage using a stack.
		</p>

		<p>
		A storage manager updates a stack allocation pointer when a block is entered
		and when it is exited. Allocating local storage objects increments the pointer
		the number of bytes required, deallocating decrements the pointer.
		</p>

		<p>
		Rule of thumb: when a language supports both heap and stack storage, use stack
		storage whenever possible. Lifetime control of stack-allocated objects is
		very efficient and automatic with a stack - this is where the "auto" storage
		(type) specifier in C comes from.
		</p>

		<p>
		<b>Stack Frame</b><br />
		Structure of stack frames varies depending on scope rules and whether a
		language is block-structured or not. Assuming a block-structured language
		which is lexically-scoped, the storage manager will create a new stack frame
		whenever control enters a new block of code (e.g. in C this would be a function
		or any control structure that sets off code with curly brackets).
		</p>

	</li>
	<li><b>Names</b></li>
	<li><b>Expressions</b> - </li>
	<li><b>Functions</b> - </li>
	<li><b>Control structures</b> - </li>
	<li><b>Global control</b> - </li>
</ul>

<!--*******************************************************************************-->

<a id="idRef"></a>
<h3 class="center chapterSep">References</h3>

<p class="references">
<b>Fischer, Alice E. and Grodzinsky, Frances S.</b>, 1993, The Anatomy of Programming Languages:
 Prentice Hall, pages. ISBN 0-13-035155-5
</p>

<p class="references">
<b>Flanagan, David</b>, 1997, JavaScript: The Definitive Guide, Third Edition:
 O`Reilly & Associates, pages. ISBN 1-56592-392-8
</p>

<p class="references">
<b>Kernighan, Brian W. and Ritchie, Dennis M.</b>, 1988, The C Programming Language, Second
 Edition: Prentice Hall, pages. ISBN 0-13-110370-9
</p>

<p class="references">
<b>Schwartz, Randal L., Olson, Erik and Christiansen, Tom</b>, 1997, Learning Perl on Win32
 Systems: O`Reilly & Associates, pages. ISBN 1-56592-324-3
</p>

        <a id="moveTop" href="#top">Top of page</a>
    </section>
    </div>
</div>

<?php include "footer.php"; ?>

</body>
</html>