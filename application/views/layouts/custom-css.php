<style>
	.ki-outline{
		position: relative;
	    display: inline-flex;
	    direction: ltr;
	}
	.form-check-label{
		color:black!important;
	}
	.fs-1-5rem{
		font-size: 1.5rem !important;
	}
	.text-right{
		text-align: right;
	}
	.select2-selection{
		height:3rem !important;
		padding:0.5rem !important;
	}
	.select2-selection__arrow{
		margin-top: 0.5rem !important;
	}
	.required{
		color:red;
		font-weight: bold;
	}
	.select2-selection__choice{
		margin:0!important;
	}
	.fs-12{
		font-size: 12px;
	}
	.spinner-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(255, 255, 255, 0.8);
        z-index: 1000;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .spinner-overlay.hidden {
        display: none;
    }
    .list-group-item{
    	cursor:pointer;
    }
    .dt-action-button{
    	display: block;
    	position: absolute;
    	margin-top:20px;
    	z-index: 10;
    }
    .mr-10{
    	margin-right: 10px;
    }
    /*@media (min-width: 992px) {
		:root {
			--bs-app-sidebar-width: 200px!important;
	        --bs-app-sidebar-width-actual: 200px!important;
	        --bs-app-sidebar-gap-start: 0px;
	        --bs-app-sidebar-gap-end: 0px;
	        --bs-app-sidebar-gap-top: 0px;
	        --bs-app-sidebar-gap-bottom: 0px;
		}
	}*/
	.app-sidebar .menu>.menu-item>.menu-link .menu-title{
		font-size: 1rem;
	}
	.app-sidebar .menu .menu-item .menu-link .menu-title{
		font-size: 1rem;
	}
	body{
		font-size: 0.8rem!important;
	}
	.select2-selection{
		height:auto!important;
	}
	.display-4{
		font-size: 2rem;
	}
	/* Compact card adjustments */
	.compact-card .card-header {
	    padding: 0.5rem 1rem; /* Reduce padding */
	    font-size: 1rem; /* Adjust font size */
	}
	.compact-card .card-body {
	    padding: 0.5rem; /* Reduce padding */
	}
	.compact-card {
	    margin-bottom: 1rem; /* Reduce margin between cards */
	    border-radius: 0.5rem; /* Slight rounding */
	    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); /* Softer shadow */
	}

	/* List Group Styling */
	.list-group-item {
	    padding: 0.4rem 0.8rem; /* Reduce list padding */
	    font-size: 0.9rem; /* Adjust font size */
	}
	.progress-bar {
	    font-size: 0.75rem; /* Smaller font size for progress bar text */
	}
	.nine-box-grid-container {
	    display: grid;
	    gap: 5px;
	}

	.grid-box {
	    height: 80px;
	    border: 1px solid #ddd;
	    display: flex;
	    align-items: center;
	    justify-content: center;
	    text-align: center;
	    font-size: 0.9rem;
	    font-weight: bold;
	    background-color: #f9f9f9;
	    border-radius: 4px;
	    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
	}

	.grid-box.low {
	    background-color: #f8d7da; /* Light red for low performance/potential */
	    color: #721c24;
	}

	.grid-box.medium {
	    background-color: #fff3cd; /* Light yellow for medium performance/potential */
	    color: #856404;
	}

	.grid-box.high {
	    background-color: #d4edda; /* Light green for high performance/potential */
	    color: #155724;
	}

	.container, .container-xxl{
		max-width: 1500px!important;
		padding-left: 30px!important;
		padding-right: 30px!important;
	}
	.pull-left{
		float:left;
		display: inline;
	}
	.card .card-header{
		align-items:center!important;
	}

	/* Table header styling */
	table thead th {
	    background-color: #eaf4fc !important; /* Light blue */
	    color: #333 !important; /* Dark text for better contrast */
	    font-weight: bold !important;
	    text-align: center;
	    padding: 10px;
	    border: 1px solid #d0e6f9; /* Subtle border */
	}

	/* Table footer styling */
	table tfoot td, table tfoot th {
	    background-color: #eaf4fc !important; /* Light blue */
	    color: #333 !important; /* Dark text for better contrast */
	    font-weight: bold !important;
	    text-align: right;
	    padding: 10px;
	    border: 1px solid #d0e6f9; /* Subtle border */
	}

	/* Table body styling (optional for consistent spacing and readability) */
	table tbody td {
	    /* padding: 10px;*/
	    border: 1px solid #f0f4f8; /* Light border for rows */
	}

	/* Ensure table has spacing and responsive behavior */
	table {
	    width: 100%;
	    border-collapse: collapse; /* Prevent double borders */
	}

	/* Optional: Add hover effect for rows */
	table tbody tr:hover {
	    background-color: #f5faff; /* Subtle hover effect */
	}
	/* Target small buttons inside tables */
	table .btn-sm {
	    padding: 2px 6px !important; /* Adjust padding for compact size */
	    font-size: 10px !important; /* Smaller font size */
	    line-height: 1.2; /* Reduce line-height for compactness */
	    border-radius: 3px; /* Slightly rounder for aesthetics */
	}
	table .btn-sm>i {
	    padding-right:0px!important;
	}
	.app-sidebar .menu>.menu-item.here>.menu-link{
		background-color: rebeccapurple;
	}
	/* Gradient Background Classes */
	.gradient-soft-green {
	    background: linear-gradient(90deg, #d4edda, #ffffff); /* Light green to white */
	    color: #00274d; /* Navy blue text for contrast */
	    text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
	    border-radius: 5px;
	    padding: 10px;
	}

	.gradient-light-blue {
	    background: linear-gradient(90deg, #cfe2ff, #ffffff); /* Light blue to white */
	    color: #00274d; /* Navy blue text for contrast */
	    text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
	    border-radius: 5px;
	    padding: 10px;
	}

	.gradient-pastel-purple {
	    background: linear-gradient(90deg, #e2d5f7, #ffffff); /* Light pastel purple to white */
	    color: #333333; /* Dark text for readability */
	    text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
	    border-radius: 5px;
	    padding: 10px;
	}

	.gradient-warm-orange {
	    background: linear-gradient(90deg, #ffe5d5, #ffffff); /* Light orange to white */
	    color: #333333; /* Dark text for readability */
	    text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
	    border-radius: 5px;
	    padding: 10px;
	}

	.gradient-teal {
	    background: linear-gradient(90deg, #d5f5f4, #ffffff); /* Soft teal to white */
	    color: #00274d; /* Navy blue text for contrast */
	    text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
	    border-radius: 5px;
	    padding: 10px;
	}

	.gradient-soft-pink {
	    background: linear-gradient(90deg, #fde2e4, #ffffff); /* Light pink to white */
	    color: #333333; /* Dark text for readability */
	    text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
	    border-radius: 5px;
	    padding: 10px;
	}

	.gradient-mint-green {
	    background: linear-gradient(90deg, #d8f3dc, #ffffff); /* Mint green to white */
	    color: #00274d; /* Navy blue text for contrast */
	    text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
	    border-radius: 5px;
	    padding: 10px;
	}

	.gradient-cool-gray {
	    background: linear-gradient(90deg, #f2f2f2, #ffffff); /* Light gray to white */
	    color: #333333; /* Dark text for readability */
	    text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
	    border-radius: 5px;
	    padding: 10px;
	}

	/* Text Styling for Better Alignment */
	.gradient-text {
	    font-weight: 600;
	    font-size: 1.2rem; /* Slightly larger text for emphasis */
	    padding: 10px 20px; /* Padding for better appearance */
	    border-radius: 5px; /* Rounded edges for a smoother look */
	}


</style>