<?
// Modul für Lamellen
// https://www.symcon.de/forum/threads/37422-Shutterscript-mit-Lamellen?highlight=lamellen

class Slat extends IPSModule
{
		
    public function Create()
    {
		//Never delete this line!
        parent::Create();
		
		//These lines are parsed on Symcon Startup or Instance creation
        //You cannot use variables here. Just static values.


	}
	
    public function ApplyChanges()
    {
		//Never delete this line!
        parent::ApplyChanges();

		$this->ValidateConfiguration();	
	
    }

		/**
        * Die folgenden Funktionen stehen automatisch zur Verfügung, wenn das Modul über die "Module Control" eingefügt wurden.
        * Die Funktionen werden, mit dem selbst eingerichteten Prefix, in PHP und JSON-RPC wiefolgt zur Verfügung gestellt:
        *
        *
        */


	
	private function ValidateConfiguration()
	{
		// check values
			$this->SetStatus(102);

		
		
	}

	
	public function RequestAction($Ident, $Value)
    {

    }


	//Add this Polyfill for IP-Symcon 4.4 and older
	protected function SetValue($Ident, $Value)
	{

		if (IPS_GetKernelVersion() >= 5) {
			parent::SetValue($Ident, $Value);
		} else {
			SetValue($this->GetIDForIdent($Ident), $Value);
		}
	}
	
}

?>