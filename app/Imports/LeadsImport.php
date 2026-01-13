<?php

namespace App\Imports;

use App\Models\Lead;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LeadsImport implements ToCollection, WithHeadingRow
{
    protected string $category;
    protected string $owner;

    public function __construct(string $category, string $owner)
    {
        $this->category = $category;
        $this->owner = $owner;
    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Lead::create([
                'sr_no'        => $row['sr_no'] ?? null,
                'first_name'   => $row['first_name'] ?? null,
                'last_name'    => $row['last_name'] ?? null,
                'phone_number' => $row['phone_number'] ?? null,
                'state'        => $row['state'] ?? null,
                'city'         => $row['city'] ?? null,
                'zip_code'     => $row['zip_code'] ?? null,
                'age'          => $row['age'] ?? null,
                'dob'          => $row['dob'] ?? null,
                'lead_type'    => $row['lead_type'] ?? null,
                'status'       => $row['status'] ?? 'new',
                'owner'        => $this->owner,
                'category'     => $this->category,
                'notes'        => $row['notes'] ?? null,
            ]);
        }
    }
}
